DROP DATABASE IF EXISTS mooc;

CREATE DATABASE IF NOT EXISTS mooc;

USE mooc;

CREATE TABLE IF NOT EXISTS EventUser (
       id INT AUTO_INCREMENT KEY,
       userId VARCHAR(30) NOT NULL,
       eventName VARCHAR(30) NOT NULL,
       dateEvent DATETIME NOT NULL,
       idEvent VARCHAR(200)NULL,
       course VARCHAR(100) NOT NULL,
       currentTime INT NULL, 
       success VARCHAR(15) NULL
);
