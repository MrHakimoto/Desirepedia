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
  ADD PRIMARY KEY (`id`);