drop table if exists `article_order`;
drop table if exists `order`;
drop table if exists `user`;
drop table if exists `rol_user`;
drop table if exists `review`;
drop table if exists `article`;
drop table if exists `type`;


use `allblue`;
create table `rol_user` (id_rol_user int primary key auto_increment, name varchar(20));
create table `user` (id_user int primary key auto_increment, email varchar(45) unique, user_name varchar(45), password varchar(45), id_rol_user int, foreign key (id_rol_user) references rol_user(id_rol_user));
create table `order` (id_order int primary key auto_increment, id_user int, address varchar(100), total_order_price double, foreign key(id_user) references user(id_user));
create table `type` (id_type int primary key auto_increment, name varchar(45));

create table `article` (id_article int primary key auto_increment, id_type int,name varchar(50), ph double, gh double, description varchar(400), temp int, longevity_in_years int, 
planted_in varchar(20), stock int, price double, foreign key(id_type) references type(id_type));

create table `article_order` (id_article_order int primary key auto_increment, id_article int, id_order int, quantity int, total_article_prince double,
foreign key(id_article) references article(id_article), foreign key(id_order) references `order`(id_order) ON DELETE CASCADE ON UPDATE CASCADE );
create table `review` (id_review int primary key auto_increment, opinion varchar(400), id_article int, id_user int, name varchar(20), foreign key(id_article) references article(id_article));
