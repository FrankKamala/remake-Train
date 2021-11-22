CREATE DATABASE swift_train;

Create table users(
     id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        username VARCHAR(200) NOT NULL UNIQUE,
        password VARCHAR(255) NOT NULL,
        user_mail VARCHAR(200) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);
