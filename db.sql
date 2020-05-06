CREATE DATABASE  IF NOT EXISTS id8039872_caballos;
USE id8039872_caballos;


CREATE TABLE usuarios(

id      int(100) not null auto_increment,
nombre  varchar(255) not null,
mail    varchar(100) not null,
mensaje varchar(255) not null,

CONSTRAINT pk_usuarios PRIMARY KEY(id)
)ENGINE=InnoDB;

