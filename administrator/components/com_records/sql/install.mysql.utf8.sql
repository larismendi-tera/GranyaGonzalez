--
-- Database: `granya`
--

-- --------------------------------------------------------

--
-- Table structure for table `gran_contact_record`
--

CREATE TABLE IF NOT EXISTS `gran_contact_record` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `contact_name` varchar(256) NOT NULL COMMENT 'Nombre del contacto que envia el mensaje',
  `contact_email` varchar(256) NOT NULL COMMENT 'Email del contacto que envia el mensaje',
  `contact_category` tinyint(1) NOT NULL COMMENT '''1'' InformaciÃ³n talleres ''2'' InformaciÃ³n estÃ©tica ''3'' Reportar problema ''4'' Otro',
  `contact_subject` varchar(256) NOT NULL COMMENT 'El asunto del mensaje',
  `contact_message` text NOT NULL COMMENT 'El mensaje que dejo el contacto',
  `status` tinyint(1) NOT NULL COMMENT '''0'' Pendiente, ''1'' Atendido',
  `admin_answer` text COMMENT 'La respuesta del admin',
  `contact_date` datetime NOT NULL COMMENT 'Fecha del mensaje',
  `answer_date` datetime DEFAULT NULL COMMENT 'Fecha de respuesta del admin',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='Tabla para almacenar los mensajes del formulario de contacto' AUTO_INCREMENT=1 ;