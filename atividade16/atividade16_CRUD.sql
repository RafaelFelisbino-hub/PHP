CREATE DATABASE atividade16_crud_db;

USE atividade16_crud_db;

CREATE TABLE pessoa (
	id_pessoa INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    usuario_pessoa VARCHAR(25),
    nome_pessoa VARCHAR(25),
    telefone_pessoa VARCHAR(15),
    email_pessoa VARCHAR(30)
);

drop table pessoa;