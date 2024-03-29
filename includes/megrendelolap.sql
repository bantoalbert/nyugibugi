create table megrendelolap 
(
id int primary key auto_increment ,
nev varchar(50) not null,
email varchar(50) not null,
telefonszam int not null,
honnan text not null,
hova text not null,
datum datetime not null,
uzenet text not null
);
