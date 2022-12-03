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

INSERT INTO `usuario` (`usuario_id`,`usuario`,`senha`,`email`,`altura`,`peso`,`imc`) 
VALUES ('jorginho', '2315', 'jorginho@gmail.com', '1.75', '63.3', '20.6694');
INSERT INTO `usuario` (`usuario_id`,`usuario`,`senha`,`email`,`altura`,`peso`,`imc`)
VALUES ('maria', '67211', 'maria@gmail.com', '1.63', '76.1', '28.6424');
