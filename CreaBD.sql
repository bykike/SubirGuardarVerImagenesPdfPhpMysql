DROP TABLE IF EXISTS `archivos`;
CREATE TABLE IF NOT EXISTS `archivos` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nombre` varchar(200) NOT NULL,
  `tipo` varchar(200) NOT NULL,
  `archivo` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;