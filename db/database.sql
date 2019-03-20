DROP DATABASE IF EXISTS pizzadb;
CREATE DATABASE pizzadb CHARACTER SET utf8;

DROP user IF EXISTS 'group3user'@'localhost';
DROP user IF EXISTS 'group3user'@'127.0.0.1';
DROP user IF EXISTS 'group3user'@'::1';

GRANT all privileges ON pizzadb.* TO 'group3user'@'localhost' IDENTIFIED BY 'Test123!';
GRANT all privileges ON pizzadb.* TO 'group3user'@'127.0.0.1' IDENTIFIED BY 'Test123!';
GRANT all privileges ON pizzadb.* TO 'group3user'@'::1' IDENTIFIED BY 'Test123!';


USE pizzadb;

DROP TABLE IF EXISTS `user`;
DROP TABLE IF EXISTS `account`;
DROP TABLE IF EXISTS `pizza`;
DROP TABLE IF EXISTS `topping`;
DROP TABLE IF EXISTS `Order`;

create table `account`
(
`account_id` int(4) not null auto_increment,
`first_name` varchar(50) not null,
`last_name` varchar(50) not null,
`email` varchar(50) not null,
`password` varchar(50) not null,
`user_name` varchar(50) not null,
primary key(`account_id`)
);

create table `user`
(
`user_id` int(4) not null auto_increment,
`loginName` varchar(20) not null,
`password` varchar(6) not null,
`rememberMe` bit,
`account_id` int(4) not null,
 `email_user` varchar(20) not null,
 primary key(`user_id`),
 	FOREIGN KEY(`account_id`) REFERENCES account(`account_id`)
);


create table `pizza`(
`pizza_id` int(4) not null auto_increment,
  primary key(`pizza_id`)
);

create table `topping`
(
`topping_id` int(4) not null auto_increment,
`name` varchar(200) not null,
primary key(`topping_id`)

);

create table `order`
(
`order_id` int(4) not null auto_increment,
`orderName` varchar(100) not null,
  primary key(`order_id`)
);
