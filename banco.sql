CREATE DATABASE  IF NOT EXISTS `arquivo`;
USE `arquivo`;

DROP TABLE IF EXISTS `funcionario`;

CREATE TABLE `funcionario` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `foto_endereco` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
);

