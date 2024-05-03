USE sms;


DROP TABLE IF EXISTS user;
CREATE TABLE user (
  `id` INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `date` DATETIME NOT NULL,
  PRIMARY KEY (`id`)
)ENGINE = InnoDB;

INSERT INTO user('username','password','email','date')VALUES('admin','admin','admin@email.com','2018-07-09 8:15:5');
INSERT INTO user('username','password','email','date')VALUES('demo','demo','demo@email.com','2018-07-09 8:15:5');
INSERT INTO user('username','password','email','date')VALUES('sumon','sumon','sumon@email.com','2018-07-09 8:15:5');

DROP TABLE IF EXISTS manufacturer;
CREATE TABLE manufacturer(
  `id` INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `info` VARCHAR(255) NOT NULL,
  `date` DATETIME NOT NULL,
  `user_id` INTEGER UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
)ENGINE = InnoDB;
INSERT INTO manufacturer('name','info','date','user_id')VALUES('ASUS','aus international ltd.','2018-07-11',1);
INSERT INTO manufacturer('name','info','date','user_id')VALUES('Lenovo','lenovo international ltd.','2018-07-11',1);
INSERT INTO manufacturer('name','info','date','user_id')VALUES('Apple','Apple Int Inc.','2018-07-11',1);


DROP TABLE IF EXISTS product;
CREATE TABLE product (
  `id` INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `p_info` VARCHAR(255),
  `date` DATETIME NOT NULL,
  `manufac_id` INTEGER UNSIGNED NOT NULL,
  `user_id` INTEGER UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
)ENGINE = InnoDB;
INSERT INTO product('name','p_info','date','manufac_id','user_id')VALUES('Mouse','This is mouse','2018-07-10',1,1);
INSERT INTO product('name','p_info','date','manufac_id','user_id')VALUES('Key-Board','This is Key-Board','2018-07-10',1,1);
INSERT INTO product('name','p_info','date','manufac_id','user_id')VALUES('Monitor','This is Monitor','2018-07-10',1,1);


DROP TABLE IF EXISTS purchase;
CREATE TABLE purchase(
  `id` INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  `price` DOUBLE(12,2) NOT NULL,
  `qty` DOUBLE(12,2) NOT NULL,
  `date` INTEGER UNSIGNED NOT NULL,
  `product_id` INTEGER UNSIGNED NOT NULL,
  `manufac_id` INTEGER UNSIGNED NOT NULL,
  `user_id` INTEGER UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
)ENGINE = InnoDB;


CREATE TABLE `sms`.`p_invoice` (
  `id` INTEGER NOT NULL,
  `date` DATETIME NOT NULL,
  `hole_seller` VARCHAR(45),
  `user_id` INTEGER UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
)
ENGINE = InnoDB;