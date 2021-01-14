CREATE DATABASE ecom;

USE ecom;

CREATE TABLE client (
    id INT NOT NULL AUTO_INCREMENT,
    first_name VARCHAR(45),
    last_name VARCHAR(45),
    email VARCHAR(45) UNIQUE,
    `password` VARCHAR(100),
    phone VARCHAR(20),
    PRIMARY KEY (id)
);

CREATE TABLE `order` (
    id INT NOT NULL AUTO_INCREMENT,
    id_client INT,
    paid TINYINT,
    PRIMARY KEY (id),
    FOREIGN KEY (id_client) REFERENCES client(id)
);

CREATE TABLE category (
	id INT NOT NULL AUTO_INCREMENT,
    	name VARCHAR(45),
    	PRIMARY KEY (id)
);

CREATE TABLE item (
	item INT NOT NULL,
    	name VARCHAR(45),
    	description TEXT,
    	image VARCHAR(150),
    	id_category INT,
    	price FLOAT,
    	PRIMARY KEY (item),
    	FOREIGN KEY (id_category) REFERENCES category(id)
);

CREATE TABLE content_order (
	id_command INT NOT NULL AUTO_INCREMENT,
    	id_item INT,
    	quantity INT,
    	PRIMARY KEY (id_command, id_item),
    	FOREIGN KEY (id_item) REFERENCES item (item),
	FOREIGN KEY (id_command) REFERENCES `order` (id)
);
