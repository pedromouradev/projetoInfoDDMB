create database carmelaon;

use carmelaon; 

create table usuario(
	codigo int not null auto_increment
			primary key,
	nome varchar(200) not null,
	login varchar(200) not null,
    senha varchar (10) not null, 
    ativo int not null
);
create table contato (
	codigo int not null auto_increment
			primary key,
     nome varchar (100) not null,
     email varchar (200) not null, 
     telefone varchar(20) not null,
     mensagem varchar (500) not null,
	 ativo int not null	 
);