create database clase_1;

use clase_1;

CREATE TABLE `computadora` (
  `id` int(11) NOT NULL auto_increment,
  `marca` varchar(100) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL,
  `tamaño` varchar(100) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `generacion` varchar(100) NOT NULL,
  `memoria` int(3) NOT NULL,
  PRIMARY KEY  (`id`)
);