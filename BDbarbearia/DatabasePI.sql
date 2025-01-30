create database barbeariaBD;
use barbeariaBD;

create table cliente
(
IDcliente int auto_increment primary key not null,
nome varchar(500) not null,
email varchar(200) not null,
telefone int not null,
dataNasc date not null,
senha varchar(12) not null
)engine = InnoDB;

select * from cliente;