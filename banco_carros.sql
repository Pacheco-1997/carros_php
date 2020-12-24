create database carros;

use carros;

create table carro(
id_carro int auto_increment primary key,
marca varchar(40) not null,
modelo varchar (40) not null,
ano varchar(10) not null,
placa varchar (15)

);


update carro set marca="u",modelo="u",ano="u",placa="u" where id_carro=2;






select * from carro

 
