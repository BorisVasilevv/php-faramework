CREATE DATABASE IF NOT EXISTS db;
USE db;
CREATE TABLE IF NOT EXISTS users (
     id INT AUTO_INCREMENT PRIMARY KEY,
     login VARCHAR(30) NOT NULL,
     password VARCHAR(30) NOT NULL
    );
