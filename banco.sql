--
-- Database: `agendacompromisso`
--
CREATE DATABASE IF NOT EXISTS `agendacompromisso` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `agendacompromisso`;

-- Tabela usuario

CREATE table usuario(

	idusuario int primary key auto_increment,
    nome varchar(50) NOT NULL,
    email varchar(50)NOT NULL,
    login varchar(30) NOT NULL unique,
    senha varchar(32) NOT NULL

);

-- Tabela compromisso 

CREATE table compromisso(

	idcompromisso int primary key auto_increment,
	titulo varchar(220) NOT NULL,
	horario varchar(10) NOT NULL,
	data text NOT NULL

);

-- Inserindo valores de exemplo no banco 

insert into usuario values(null,'Administradora','adm@gmail.com','admin',md5('admin'));
insert into compromisso values(null,'Exemplo 1','20:00','20/10/2021');

select * from usuario;
