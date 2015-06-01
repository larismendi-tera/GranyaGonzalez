<?php
/**
 * @copyright Robert Reimi
 * @license GNU General Public License version 2 or later;
 */

// no direct access
defined('_JEXEC') or die;


// Include helpers
JLoader::register('modTalleresLatestHelper', dirname(__FILE__).'/helper.php');
JLoader::register('TalleresHelper', JPATH_ADMINISTRATOR.'/components/com_talleres/helpers/talleres.php');

$listPermanente = false;
$listMasivo = false;
$listIndividual = false;

/* Load lists */
if ($params->get('show_permamente') == 1) {
    $listPermanente = modTalleresLatestHelper::getList('p', $params->get('count_permamente'), $params->get('country_code'));
}

if ($params->get('show_masivo') == 1) {
    $listMasivo = modTalleresLatestHelper::getList('m', $params->get('count_masivo'), $params->get('country_code'));
}

if ($params->get('show_individual') == 1) {
    $listIndividual = modTalleresLatestHelper::getList('i', $params->get('count_individual'), $params->get('country_code'));
}

if ($params->get('id_invividual') != null) {
	$taller_individual = modTalleresLatestHelper::getTaller($params->get('id_invividual'));
}

if ($params->get('id_permanente') != null) {
	$taller_semiprivado = modTalleresLatestHelper::getTaller($params->get('id_permanente'));
}

/* Load module class sufix */
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

/* Load layout */
require JModuleHelper::getLayoutPath('mod_talleres_latest', $params->get('layout', 'default'));