CREATE DATABASE classlist;

CREATE TABLE students (
 
 id INT(32) NOT NULL AUTO_INCREMENT,
 fn VARCHAR(24),
 ln VARCHAR(24),
 photo VARCHAR(64),
 job VARCHAR(64),
 words VARCHAR(64),
 inspire VARCHAR(64),
 dislike VARCHAR(64),
 PRIMARY KEY(id)

);