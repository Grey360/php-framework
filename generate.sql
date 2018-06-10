
/* If the database doesn't exist, we create it,
else, we just use it. */
CREATE DATABASE IF NOT EXISTS `frameworkphp`;
USE frameworkphp;

/* Our Users table is dropped if it exists */
DROP TABLE IF EXISTS `users`;
CREATE TABLE users(
    id INT(11) AUTO_INCREMENT NOT NULL,
    surname VARCHAR(50),
    firstname VARCHAR(50),
    PRIMARY KEY(id)
);

/* Our Adresses table is dropped if it exists */
DROP TABLE IF EXISTS `addresses`;
CREATE TABLE addresses(
    id INT(11) AUTO_INCREMENT NOT NULL,
    user INT(11) NOT NULL,
    street VARCHAR(255),
    number INT(6),
    country VARCHAR(50),
    city VARCHAR(50),
    PRIMARY KEY(id),
    FOREIGN KEY(user) REFERENCES users(id)
);


