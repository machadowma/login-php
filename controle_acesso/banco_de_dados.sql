create database controle_acesso;
use controle_acesso;
drop table if exists usuario ;

create table usuario (
	login varchar(20) primary key
    ,senha varchar(200) not null
    ,email varchar(200)
);
