-- faut creer une base de donne du nom db_sharme 
drop table if exists T_GENRE;

create table T_MEMBER (
  MEMBER_ID integer primary key auto_increment,
  FIRSTNAME    varchar(100) not null,
  LASTNAME     varchar(100) not null,
  ADDRESS      varchar(200) not null,
  PASSWORD     varchar(225) not null,
  PHONE_NUMBER varchar(20)      null,
  EMAIL        varchar(100) not null
) ENGINE=INNODB CHARACTER SET utf8 COLLATE utf8_general_ci;
