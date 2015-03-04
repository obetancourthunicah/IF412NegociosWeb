CREATE TABLE `productos` (
  `idproducto` bigint(20) NOT NULL AUTO_INCREMENT,
  `nomproducto` varchar(128) COLLATE utf8_bin NOT NULL,
  `barraproducto` varchar(128) COLLATE utf8_bin DEFAULT NULL,
  `estproducto` char(3) COLLATE utf8_bin DEFAULT NULL,
  `catecod` int(11) DEFAULT NULL,
  PRIMARY KEY (`idproducto`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

CREATE TABLE `roles` (
  `idroles` varchar(25) COLLATE utf8_bin NOT NULL,
  `roledes` varchar(45) COLLATE utf8_bin NOT NULL,
  `roleest` char(3) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`idroles`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

CREATE TABLE `usuarios` (
  `idusuarios` bigint(20) NOT NULL AUTO_INCREMENT,
  `usuarioemail` varchar(125) COLLATE utf8_bin NOT NULL,
  `usuarionom` varchar(65) COLLATE utf8_bin NOT NULL,
  `usuariopwd` varchar(128) COLLATE utf8_bin NOT NULL,
  `usuarioest` char(3) COLLATE utf8_bin NOT NULL,
  `usuariofching` timestamp DEFAULT NULL,
  `usuariolstlgn` datetime DEFAULT NULL,
  `usuariofatm` int(11) DEFAULT NULL,
  `usuariofchlp` datetime DEFAULT NULL,
  PRIMARY KEY (`idusuarios`),
  UNIQUE KEY `usuarioemail_UNIQUE` (`usuarioemail`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

CREATE TABLE `usuarios_roles` (
  `roleid` varchar(25) COLLATE utf8_bin NOT NULL,
  `usuarioid` bigint(20) NOT NULL,
  `roluserest` char(3) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`roleid`,`usuarioid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
