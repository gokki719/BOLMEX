create database bolmex;
	use bolmex;

create table clientes (
	Numero int not null auto_increment,
	NombreClien varchar(100) not null,
	Edad int not null,
	Email varchar(50) not null,
	Telefono varchar(50) not null,
	FormaPag varchar(100) not null,
	PRIMARY KEY (Numero)
	);
insert into clientes (NombreClien,Edad, Email, Telefono,FormaPag)
	values ("Jose Hernandez",  25, "joseg123@gmail.com",5625475768,"Paypal");
    select * from clientes;