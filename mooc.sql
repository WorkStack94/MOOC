DROP DATABASE IF EXISTS mooc;

CREATE DATABASE IF NOT EXISTS mooc;

USE mooc;

CREATE TABLE IF NOT EXISTS users (
       id INT AUTO_INCREMENT PRIMARY KEY,
       login VARCHAR(30) NOT NULL 
       );

CREATE TABLE IF NOT EXISTS fiche (
       id INT AUTO_INCREMENT PRIMARY KEY,
       ftype VARCHAR(30) NOT NULL,
       max_tmp TIMESTAMP
       );

CREATE TABLE IF NOT EXISTS cours (
       id INT AUTO_INCREMENT PRIMARY KEY,
       login VARCHAR(30) NOT NULL 
       );

CREATE TABLE IF NOT EXISTS fait (
       idUsers INT,
       idFiche INT,
       temps TIMESTAMP NOT NULL,
       moment DATE NOT NULL,
       FOREIGN KEY (idUsers) REFERENCES users(id),
       FOREIGN KEY (idFiche) REFERENCES cours(id)
       );
