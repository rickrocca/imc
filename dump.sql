CREATE DATABASE login;
USE login;

CREATE TABLE `login`.`usuario` (
  `usuario_id` INT NOT NULL AUTO_INCREMENT,
  `usuario` VARCHAR(200) NOT NULL,
  `senha` VARCHAR(32) NOT NULL,
  `email` VARCHAR(200) NOT NULL,
  `altura` FLOAT NOT NULl,
  `peso` FLOAT NOT NULl,
  `imc` FLOAT NOT NULl,
  PRIMARY KEY (`usuario_id`));

INSERT INTO `usuario` (`usuario_id`,`usuario`,`senha`) VALUES (1,'mario','132');
INSERT INTO `usuario` (`usuario_id`,`usuario`,`senha`) VALUES (2,'pedro','321');
INSERT INTO `usuario` (`usuario_id`,`usuario`,`senha`) VALUES (3,'jorge','123');