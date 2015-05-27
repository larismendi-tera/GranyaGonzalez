CREATE  TABLE `granyagonzalez`.`gran_refuerzo_links` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `fecha_expiracion` DATETIME NOT NULL COMMENT 'Fecha de expiración del link, default 48 horas..' ,
  `user_id` INT NOT NULL COMMENT 'Owner of link' ,
  PRIMARY KEY (`id`) )
ENGINE = MyISAM
COMMENT = 'Almancena los enlaces generados para los audios';
