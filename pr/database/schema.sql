create database ... default character set utf8 collate utf8_unicode_ci;

create user ...@localhost identified with mysql_native_password by '...';

grant all on ....* to ...@localhost;

flush privileges;