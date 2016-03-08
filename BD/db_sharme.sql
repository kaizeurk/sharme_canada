-- CREATION DE LA BASE DE DONNE db_sharme 
DROP DATABASE IF EXISTS db_sharme; 
CREATE DATABASE db_sharme; 
USE db_sharme; 

-- CEATION DES TABLE
-- faut creer une base de donne du nom db_sharme 
DROP TABLE if EXISTS T_GENRE;

CREATE TABLE T_MEMBER (
  MEMBER_ID     integer primary key auto_increment,
  FIRSTNAME     varchar(100) not null,
  LASTNAME      varchar(100) not null,
  ADDRESS       varchar(200)     null,
  CODE_POSTAL   varchar(20)      null,
  TOWN          varchar(200)     null,
  PASSWORD      varchar(225)     null,
  PHONE_NUMBER  varchar(20)      null,
  EMAIL         varchar(100) not null
) ENGINE=INNODB CHARACTER SET utf8 COLLATE utf8_general_ci;

-- INSERTION un exemplaire
INSERT INTO T_MEMBER (FIRSTNAME, LASTNAME, ADDRESS,CODE_POSTAL,TOWN,PASSWORD,PHONE_NUMBER,EMAIL) 
VALUES ('sharme','canada','123 rue produits produit des champs','x8r 9s8','ville de montagne','123456','123-456-7890','sharme@gmail.com'),
('admin','admin','123 rue produits produit des champs','x8r 9s8','ville de montagne','123456','123-456-7890','admin@admin.org');
