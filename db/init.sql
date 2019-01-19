-- init.sql

DROP DATABASE IF EXISTS skinprofiledb;
CREATE DATABASE skinprofiledb;

USE skinprofiledb;

-- create tables
CREATE TABLE USERS(
  uname VARCHAR(100) NOT NULL PRIMARY KEY,
  password VARCHAR(100) NOT NULL
);

-- ingredients that user should avoid
CREATE TABLE AVOID(
  uname VARCHAR(100) NOT NULL,
  ing VARCHAR(200) NOT NULL,
  FOREIGN KEY (uname) REFERENCES USERS(uname) ON DELETE CASCADE
);

-- table for users
CREATE TABLE `skincare`.`users` ( `id` INT(200) NOT NULL AUTO_INCREMENT , `name` VARCHAR(1000) NOT NULL , `email` VARCHAR(1000) NOT NULL , `password` VARCHAR(100) NOT NULL , `skintype` VARCHAR(100) NOT NULL , PRIMARY KEY (`id`));

-- table for skincareissues
CREATE TABLE `skincare`.`skinissues` ( `uid` INT(200) NOT NULL , `disease` VARCHAR(1000) NOT NULL , `discomfort` VARCHAR(1000) NOT NULL , `skintype` VARCHAR(1000) NOT NULL , `skinid` INT(100) NOT NULL , PRIMARY KEY (`skinid`));

-- adding foreign key(uid) to skincareissues which is primary key in users 
ALTER TABLE `skinissues` ADD FOREIGN KEY (`uid`) REFERENCES `users`(`uid`) ON DELETE RESTRICT ON UPDATE RESTRICT;

-- table for recommended products
CREATE TABLE `skincare`.`recommendedprod` ( `skinid` INT(100) NOT NULL , `type` VARCHAR(100) NOT NULL , `prodName` VARCHAR(100) NOT NULL , `ingredients` VARCHAR(100) NOT NULL ); 

-- skinid is set as primary key in skinissue table 
ALTER TABLE `skinissues` ADD `skinid` INT(100) NOT NULL AUTO_INCREMENT AFTER `skintype`, ADD PRIMARY KEY (`skinid`);

-- skinid is made foreign key in recommendedprod table
ALTER TABLE `recommendedprod` ADD FOREIGN KEY (`skinid`) REFERENCES `skinissues`(`skinid`) ON DELETE RESTRICT ON UPDATE RESTRICT;
