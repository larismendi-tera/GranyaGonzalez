--
-- Database: `granya`
--

-- --------------------------------------------------------

--
-- Table structure for table `gran_taller`
--

CREATE TABLE IF NOT EXISTS `#__taller` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `fecha` datetime NOT NULL COMMENT 'Fecha del evento',
  `tipo` char(1) NOT NULL COMMENT 'Tipo de taller (p: permanente, m: masivo, i: individual)',
  `lugar` varchar(512) NOT NULL,
  `precio` varchar(10) NOT NULL,
  `precio_oferta` varchar(10) DEFAULT NULL COMMENT 'Precio activo si el taller esta en descuento',
  `fecha_limite_oferta` datetime DEFAULT NULL COMMENT 'Fecha limite de validez del precio oferta',
  `cupo` int(11) DEFAULT NULL,
  `hora_inicio` int(2) DEFAULT NULL,
  `hora_fin` int(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;