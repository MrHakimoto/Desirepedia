-- database: desirepedia



SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE IF NOT EXISTS `user` (`id` INT(11) NOT NULL, 
`nome` varchar(30), 
`senha` TEXT, `email` TEXT, 
`picture` TEXT,  
`data_inclusao` datetime DEFAULT CURRENT_TIMESTAMP) 
ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `user`
  ADD PRIMARY KEY AUTO_INCREMENT (`id`);
  
ALTER TABLE `user` CHANGE `id` `id` INT(11) NOT NULL AUTO_INCREMENT;


CREATE TABLE IF NOT EXISTS `picture_db` (`id` INT(11) NOT NULL, 
`id_creator` INT(11), 
`caminho` TEXT,
`data_inclusao` datetime DEFAULT CURRENT_TIMESTAMP) 
ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `picture_db`
  ADD PRIMARY KEY AUTO_INCREMENT (`id`);
  
ALTER TABLE `picture_db` CHANGE `id` `id` INT(11) NOT NULL AUTO_INCREMENT;

CREATE TABLE IF NOT EXISTS `usuario_info` (`id` INT(11) NOT NULL, 
`nome` TEXT, 
`sobrenome` TEXT, `telefone` TEXT, 
`cpf` TEXT,`cep` TEXT, `logradouro` TEXT, `bairro` TEXT,
`complemento` TEXT,`cidade` TEXT,`estado` TEXT,  
`ultima_alteracao` datetime DEFAULT CURRENT_TIMESTAMP) 
ENGINE=InnoDB DEFAULT CHARSET=latin1;


CREATE TABLE IF NOT EXISTS `contabilizacao` (`id` INT(11) NOT NULL, 
`questao` varchar(30), 
`errou` int(13),
`acertou` int(13),
`data` datetime DEFAULT CURRENT_TIMESTAMP) 
ENGINE=InnoDB DEFAULT CHARSET=latin1;
