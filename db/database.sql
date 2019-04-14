DROP DATABASE IF EXISTS pizzadb;
CREATE DATABASE pizzadb CHARACTER SET utf8;

DROP user IF EXISTS 'group3user'@'localhost';
DROP user IF EXISTS 'group3user'@'127.0.0.1';
DROP user IF EXISTS 'group3user'@'::1';

GRANT all privileges ON pizzadb.* TO 'group3user'@'localhost' IDENTIFIED BY 'Test123!';
GRANT all privileges ON pizzadb.* TO 'group3user'@'127.0.0.1' IDENTIFIED BY 'Test123!';
GRANT all privileges ON pizzadb.* TO 'group3user'@'::1' IDENTIFIED BY 'Test123!';


USE pizzadb;

DROP TABLE IF EXISTS `order_pizza`;
DROP TABLE IF EXISTS `order`;
DROP TABLE IF EXISTS `order_info`;
DROP TABLE IF EXISTS `userLogin`;
DROP TABLE IF EXISTS `Profile`;
DROP TABLE IF EXISTS `address`;
DROP TABLE IF EXISTS `customPizza`;
DROP TABLE IF EXISTS `preDefinedPizza`;
DROP TABLE IF EXISTS `cheese`;
Drop Table if EXISTS `crust`;
DROP TABLE IF EXISTS `sauce`;
DROP TABLE IF EXISTS `topping`;
DROP TABLE IF EXISTS `size`;


CREATE TABLE `address`
(
 `addressId`  integer NOT NULL auto_increment,
 `streetName` varchar(100) NOT NULL ,
 `numberAdd`  varchar(6) NOT NULL ,
 `postalcode` varchar(6) NOT NULL ,
 `city`       varchar(100) NOT NULL ,
 `province`   varchar(100) NOT NULL ,
PRIMARY KEY (`addressId`)
);

CREATE TABLE `Profile`
(
 `profile_id`   integer NOT NULL auto_increment ,
 `addressId`   integer NOT NULL ,
 `email`        varchar(100) NOT NULL ,
 `firstName`    varchar(100) NOT NULL ,
 `lastName`     varchar(100) NOT NULL ,
 `phonecontact` varchar(11) NOT NULL ,
PRIMARY KEY (`profile_id`),
FOREIGN KEY (`addressId`) REFERENCES `address` (`addressId`)
);


CREATE TABLE `userLogin`
(
 `userId`     integer NOT NULL auto_increment,
 `profile_id` integer NOT NULL,
 `login`      varchar(20) NOT NULL unique,
 `password`   varchar(20) NOT NULL,
 `rememberme` bit NOT NULL ,
PRIMARY KEY (`userId`),
 FOREIGN KEY (`profile_id`) REFERENCES Profile(`profile_id`)
);

CREATE TABLE `sauce`
(
 `sauceId` integer NOT NULL auto_increment ,
 `name`    varchar(45) NOT NULL ,
 `price` decimal not null,
PRIMARY KEY (`sauceId`)
);

CREATE TABLE `crust`
(
 `crustId` integer NOT NULL auto_increment ,
 `price` decimal not null,
 `name`      varchar(45) NOT NULL ,
PRIMARY KEY (`crustId`)
);

CREATE TABLE `topping`
(
 `toppingId` integer NOT NULL auto_increment ,
 `price` decimal not null,
 `name`      varchar(45) NOT NULL ,
PRIMARY KEY (`toppingId`)
);

create table `size`
(
`sizeId` integer NOT NULL auto_increment,
 `name`    varchar(45) NOT NULL ,
 `price` decimal not null,
PRIMARY KEY (`sizeId`)
);

create table `cheese`
(
 `cheeseId` integer NOT NULL auto_increment,
 `name`    varchar(45) NOT NULL ,
 `price` decimal not null,
PRIMARY KEY (`cheeseId`)
);

CREATE TABLE `customPizza`
(
 `customPizzaId` integer NOT NULL auto_increment,
 `sauceId`     integer NOT NULL ,
 `sizeId`   integer  NOT NULL ,
 `crustId`   integer  NOT NULL ,
 `cheeseId` integer NOT NULL ,
PRIMARY KEY (`customPizzaId`),
FOREIGN KEY (`crustId`) REFERENCES `crust` (`crustId`),
FOREIGN KEY (`sauceId`) REFERENCES `sauce` (`sauceId`),
FOREIGN KEY (`sizeId`) REFERENCES `size` (`sizeId`),
FOREIGN KEY (`cheeseId`) REFERENCES `cheese` (`cheeseId`)
);

CREATE TABLE `preDefinedPizza`
(
 `preDefinedPizzaId` integer NOT NULL auto_increment,
  `customPizzaId` integer NOT NULL ,
  `name` varchar(30) NOT NULL ,
PRIMARY KEY (`preDefinedPizzaId`),
FOREIGN KEY (`customPizzaId`) REFERENCES `customPizza` (`customPizzaId`)
);


CREATE TABLE `topping_pizza`
(
`topping_pizzaId` integer NOT NULL auto_increment,
`toppingId` integer NOT NULL,
`customPizzaId` integer NOT NULL,
`side` varchar(45) NOT NULL ,
PRIMARY KEY (`topping_pizzaId`),
FOREIGN KEY (`toppingId`) REFERENCES `topping` (`toppingId`),
FOREIGN KEY (`customPizzaId`) REFERENCES `customPizza` (`customPizzaId`)
);

create table `payment`
(
 `paymentId` integer not null,
 `methodName` varchar(30) not null,
 PRIMARY KEY (`paymentId`)
);

create table `order_info`
(
 `orderId` integer NOT NULL auto_increment,
 `profile_id` integer NOT NULL ,
 `paymentId` integer NOT NULL,
 `is_delivery` bit NOT NULL ,
--  `orderTiming` datetime,
 `total`  decimal NOT NULL,
  PRIMARY KEY (`orderId`),
  FOREIGN KEY (`profile_id`) REFERENCES `Profile` (`profile_id`),
  FOREIGN KEY (`paymentId`) REFERENCES `payment` (`paymentId`)
);

CREATE TABLE `order_pizza`
(
 `order_pizza_id` integer NOT NULL auto_increment,
 `customPizzaId` integer,
 `preDefinedPizzaId` integer,
 `price` decimal NOT NULL ,
 `orderId` integer NOT NULL ,
 `specialInstructions` varchar(200),
PRIMARY KEY (`order_pizza_id`),
FOREIGN KEY (`orderId`) REFERENCES `order_info` (`orderId`),
FOREIGN KEY (`customPizzaId`) REFERENCES `customPizza` (`customPizzaId`),
FOREIGN KEY (`preDefinedPizzaId`) REFERENCES `preDefinedPizza` (`preDefinedPizzaId`)
);

--Inserts
insert into `crust` (`price`,`name`) values 
(0, 'Original Hand Tossed'),
(0, 'Thin crust'),
(0, 'Gluten free');

insert into `topping` (`price`,`name`) values 
(0.25, 'Pepperoni'),
(0.50, 'Sausage'),
(0.75,'Ham'),
(0.25, 'Chicken'),
(0.50, 'Brooklin Pepperoni'),
(0.75,'Beef'),
(0.25, 'Anchovy'),
(0.50, 'Pinapple'),
(0.75,'Avocado'),
(0.25, 'Tomato'),
(0.50, 'Dried Tomato'),
(0.75,'Champignon'),
(0.25, 'Parsley'),
(0.50, 'Basil'),
(0.75,'Onion'),
(0.25, 'Garlic'),
(0.50, 'Banana Pepper'),
(0.75,'Jalapeno'),
(0.75,'Provolone');

insert into `size` (`name`, `price`) values
('Medium',5.00),
('Large',6.00),
('Extra Large',8.00),
('Small',4.00),
('2 pieces',2.00);


insert into `cheese` (`name`, `price`) values
('None',0),
('Mozzarela',1),
('Gouda',1),
('Manchego',1),
('Cheddar',1),
('Camembert',1),
('Parmesan',1),
('Asiago',1),
('Gorgonzola',1);

insert into `sauce` (`name`, `price`) values
('none',0),
('Pizza Sauce',2.00),
('BBQ Sauce',2.00),
('Alfredo Sauce',2.00),
('Hearty Marinara Sauce',2.00),
('Ranch Dressing',2.00),
('Garlic Parmesan Sauce',2.00);

insert into `payment` (`paymentId`, `methodName`) values
(1, 'Cash'),
(2, 'Credit on deliver'),
(3, 'Debit on deliver');

insert into address(streetName,numberAdd,postalcode,city,province) values('bla', 'bla','bla', 'bla', 'bla');
insert into Profile(addressId,email,firstName,lastName,phonecontact) values (1, 'bla', 'bla','bla', 'bla');