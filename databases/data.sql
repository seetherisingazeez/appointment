CREATE DATABASE pmanagement;

use pmanagement;

CREATE TABLE users (
	id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
	firstname VARCHAR(30) NOT NULL,
	lastname VARCHAR(30) NOT NULL,
	email VARCHAR(50) NOT NULL,
        password VARCHAR(50) NOT NULL, 
	address VARCHAR(50) NOT NULL,
	date TIMESTAMP
);
