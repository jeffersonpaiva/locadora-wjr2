--------------------------------------------------------------
-- CRIAÇÃO DA TABELA USUARIOS
--------------------------------------------------------------

CREATE TABLE `db_new_locare`.`tb_usuarios` ( `id` INT(20) NOT NULL AUTO_INCREMENT , `Nome` VARCHAR(100) NOT NULL , `Login` VARCHAR(100) NOT NULL , `Senha` VARCHAR(32) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

--------------------------------------------------------------
-- CRIAÇÃO DO LOGIN E SENHA (MD5)
--------------------------------------------------------------

INSERT INTO `tb_usuarios` (`id`, `Nome`, `Login`, `Senha`) VALUES (NULL, 'administrador', 'admin', MD5('1234'));