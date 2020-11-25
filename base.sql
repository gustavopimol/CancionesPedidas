drop database if exists oasis;
create database oasis;
use oasis;
create table canciones(
idcancion char(1),
cancion varchar(50),
primary key(idcancion));

create table pedidos(
email varchar(50),
idcancion char(1),
foreign key(idcancion) references canciones(idcancion));

insert canciones values('1','Shape Of My Heart');
insert canciones values('2','Bailamos');
insert canciones values('3','My Favorite Game');