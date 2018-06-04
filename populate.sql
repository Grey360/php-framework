
CREATE DATABASE IF NOT EXISTS `frameworkphp`;

USE frameworkphp;

DROP TABLE IF EXISTS `users`;
CREATE TABLE users(id INT(11) AUTO_INCREMENT NOT NULL, surname VARCHAR(50), firstname VARCHAR(50), PRIMARY KEY(id));
INSERT INTO users (surname, firstname) values("PETEMOYA", "Gailor"),("Chronormu", "Chromie"),("Amani", "Zul'jin");
