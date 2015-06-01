<?php
require_once 'Mailchimp.php';

class Email
{

    private $mailchimp;
    private $connection;

    function __construct($host, $user, $password, $database, $apiKey)
    {
        $this->connection = mysqli_connect($host, $user, $password, $database);
        $this->mailchimp = new Mailchimp($apiKey);
        date_default_timezone_set('America/Caracas');
    }

    public function execute($courseId = null)
    {
        try {
            if($courseId)
                $courses = $this->getCourse($courseId);
            else
                $courses = $this->getLastCourses();

            foreach ($courses as $course) {
                $subscribers = $this->getSubscribers($course["id"]);
                print_r("total de usuarios " . count($subscribers));
                $list = $this->getList($course["id"]);
                foreach ($subscribers as $subscriber) {
                    $dataSubscriber = array();
                    $dataSubscriber["list_id"] = $list['data'][0]['id'];
                    $dataSubscriber["email"] = array("email" => $subscriber["correo"]);
                    $dataSubscriber["merge_vars"] = array('FNAME' => isset($subscriber["nombre"]) ? $subscriber["nombre"] : "-");
                    $this->addSubscriber($dataSubscriber);
                }

                /// Creamos las 12 campañas ingresa tu peso - enviadas todos los lunes
                $options = array(
                    'list_id' => $list['data'][0]['id'],
                    'to_name' => 'Granya González',
                    'subject' => 'Granya González - Ingresa Tu Peso',
                    'from_email' => 'not-reply@gmail.com',
                    'from_name' => 'Granya González',
                    'template_id' => 143209
                );
                $date = date('Y-m-d H:m:i', strtotime('+12 hours', strtotime('next monday')));
                for ($i = 1; $i <= 12; $i++) {
                    $options['title'] = 'Ingresa tu peso - Taller-' . $course["id"] . '_' . $i;
                    $campaigns = $this->createCampaign($options, $date);
                    $this->createSchedule($campaigns["id"], $date);
                    $date = date('Y-m-d H:m:i', strtotime('+12 hours', strtotime('next monday', strtotime($date))));
                }

                /// Creamos las 3 campañas de reforzamiento - enviada mensualmente
                $date = date('Y-m-d H:m:i', strtotime('+12 hours', strtotime('+1 month')));
                $templateId = 144185;
                for ($i = 1; $i <= 3; $i++) {
                    $options['template_id'] = $templateId;
                    $options['subject'] = 'Granya González - Reforzamiento ' . $i;
                    $options['title'] = 'Reforzamiento - Taller-' . $course["id"] . '_' . $i;
                    $campaigns = $this->createCampaign($options);
                    $this->createSchedule($campaigns["id"], $date);
                    $date = date('Y-m-d H:m:i', strtotime('+6 hours', strtotime('+1 month', strtotime($date))));
                    $templateId = $templateId == 144185 ? 144189 : 145921;
                }
            }

        } catch (Exception $e) {
            echo 'Excepción capturada: ', $e->getMessage(), "\n";
        }

    }

    protected function getCourse($id)
    {
        $query = "SELECT
                gran_taller.id
                FROM
                gran_taller
                WHERE gran_taller.id = $id";

        return $this->getResult($query);
    }

    protected function getLastCourses()
    {
        $query = "SELECT
                gran_taller.id
                FROM
                gran_taller
                WHERE fecha = CURDATE() - INTERVAL 1 DAY";

        return $this->getResult($query);
    }

    protected function addSubscriber($data)
    {
        return $this->mailchimp->lists->subscribe($data["list_id"], $data["email"], $data["merge_vars"], 'html', false, true);
    }


    protected function getList($id)
    {
        $filters = array('list_name' => 'taller_' . $id);
        return $this->mailchimp->lists->getList($filters);
    }

    protected function getSubscribers($id = 0)
    {
        $query = "SELECT
                    gran_inscripcion.id,
                    gran_inscripcion.nombre,
                    gran_inscripcion.correo
                    FROM
                    gran_inscripcion
                    WHERE
                    gran_inscripcion.correo <> '' AND
                    gran_inscripcion.correo IS NOT NULL AND
                    gran_inscripcion.taller_id = $id";

        return $this->getResult($query);
    }

    protected function createCampaign($options)
    {
        return $this->mailchimp->campaigns->create('regular', $options, null, null, null);
    }

    protected function createSchedule($campaignId, $date)
    {
        $this->mailchimp->campaigns->schedule($campaignId, $date);
    }


    protected function getResult($query)
    {
        $result = mysqli_query($this->connection, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            $results[] = $row;
        }
        return $results;
    }

}