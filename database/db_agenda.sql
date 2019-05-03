CREATE DATABASE  IF NOT EXISTS `agenda` ;
USE `agenda`;

DROP TABLE IF EXISTS `contato`;

CREATE TABLE `contato` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE utf8_bin NOT NULL,
  `datanascimento` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
INSERT INTO `contato` VALUES (1,'Jose Cavalcanti','2007-08-18'),(2,'chiquinha','2007-08-18'),(3,'Chaves','1960-08-22'),(10,'Jose Cavalcanti','2007-08-18');