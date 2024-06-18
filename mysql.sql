CREATE DATABASE survey;

USE survey;

CREATE TABLE responses (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    age INT(3)
);
