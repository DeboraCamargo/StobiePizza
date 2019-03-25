DROP DATABASE IF EXISTS pizzadb;
CREATE DATABASE pizzadb CHARACTER SET utf8;

DROP user IF EXISTS 'group3user'@'localhost';
DROP user IF EXISTS 'group3user'@'127.0.0.1';
DROP user IF EXISTS 'group3user'@'::1';

GRANT all privileges ON pizzadb.* TO 'group3user'@'localhost' IDENTIFIED BY 'Test123!';
GRANT all privileges ON pizzadb.* TO 'group3user'@'127.0.0.1' IDENTIFIED BY 'Test123!';
GRANT all privileges ON pizzadb.* TO 'group3user'@'::1' IDENTIFIED BY 'Test123!';


USE pizzadb;

DROP TABLE IF EXISTS `address`;
DROP TABLE IF EXISTS `Profile`;
DROP TABLE IF EXISTS `userLogin`;
DROP TABLE IF EXISTS `sauce`;
DROP TABLE IF EXISTS `topping`;
DROP TABLE IF EXISTS `pizzaSize`;
DROP TABLE IF EXISTS `customPizza`;
DROP TABLE IF EXISTS `preDefinedPizza`;
DROP TABLE IF EXISTS `orders`;
DROP TABLE IF EXISTS `orderDetails`;
DROP TABLE IF EXISTS `pizzaCheese`;


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

CREATE TABLE `topping`
(
 `toppingId` integer NOT NULL auto_increment ,
 `price` decimal not null,
 `name`      varchar(45) NOT NULL ,
 `side`      varchar(45) NOT NULL ,
PRIMARY KEY (`toppingId`)
);

create table `pizzaSize`
(
`pizzaSizeId` integer NOT NULL auto_increment,
 `name`    varchar(45) NOT NULL ,
 `price` decimal not null,
PRIMARY KEY (`pizzaSizeId`)
);

create table `pizzaCheese`
(
pizzaCheeseId integer NOT NULL auto_increment,
`name`    varchar(45) NOT NULL ,
 `price` decimal not null,
PRIMARY KEY (`pizzaCheeseId`)
);

CREATE TABLE `customPizza`
(
 `customPizzaId` integer NOT NULL auto_increment,
 `toppingId`   integer NOT NULL ,
 `sauceId`     integer NOT NULL ,
 `pizzaSizeId`   integer  NOT NULL ,
 `Crust`   varchar(30)  NOT NULL ,
 `pizzaCheeseId` integer NOT NULL ,
PRIMARY KEY (`customPizzaId`),
FOREIGN KEY (`toppingId`) REFERENCES `topping` (`toppingId`),
FOREIGN KEY (`sauceId`) REFERENCES `sauce` (`sauceId`),
FOREIGN KEY (`pizzaSizeId`) REFERENCES `pizzaSize` (`pizzaSizeId`),
FOREIGN KEY (`pizzaCheeseId`) REFERENCES `pizzaCheese` (`pizzaCheeseId`)
);

CREATE TABLE `preDefinedPizza`
(
 `preDefinedPizzaId` integer NOT NULL auto_increment,
  `customPizzaId` integer NOT NULL ,
  `name` varchar(30) NOT NULL ,
PRIMARY KEY (`preDefinedPizzaId`),
FOREIGN KEY (`customPizzaId`) REFERENCES `customPizza` (`customPizzaId`)
);

CREATE TABLE `orders`
(
 `ordersId` integer NOT NULL auto_increment,
 `customPizzaId` integer,
  `preDefinedPizzaId` integer,
 `price` decimal NOT NULL ,
 `specialInstructions` varchar(200),
PRIMARY KEY (`ordersId`),
FOREIGN KEY (`customPizzaId`) REFERENCES `customPizza` (`customPizzaId`),
FOREIGN KEY (`preDefinedPizzaId`) REFERENCES `preDefinedPizza` (`preDefinedPizzaId`)

);

create table `payment`
(
`paymentId` integer not null auto_increment,
`methodName` varchar(30) not null,
PRIMARY KEY (`paymentId`)
);

create table `orderDetails`
(
 `orderDetailsId` integer NOT NULL auto_increment,
 `ordersId` integer NOT NULL ,
 `profile_id`    integer NOT NULL ,
 `paymentId` integer NOT NULL ,
 `deliveryMethod` varchar(45) NOT NULL ,
 `orderTiming` datetime,
  `total`  decimal NOT NULL ,
   PRIMARY KEY (`orderDetailsId`),
   FOREIGN KEY (`profile_id`) REFERENCES `Profile` (`profile_id`),
   FOREIGN KEY (`ordersId`) REFERENCES `orders` (`ordersId`),
   FOREIGN KEY (`paymentId`) REFERENCES `payment` (`paymentId`)
);




