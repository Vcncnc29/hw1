
CREATE DATABASE users;
CREATE TABLE utenti(  
    nome VARCHAR(255) PRIMARY KEY,
    cognome VARCHAR(255),
    email VARCHAR(255) ,
    indirizzo VARCHAR(255),
    password VARCHAR(255),
    like_ VARCHAR(255)
) Engine=InnoDB;

