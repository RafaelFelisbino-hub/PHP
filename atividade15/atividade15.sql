CREATE DATABASE atividade15_crud_db;

USE atividade15_crud_db;

CREATE TABLE pacientes (
	cod_paciente INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nome_paciente VARCHAR(45) NOT NULL,
    bairro_paciente VARCHAR(45) NOT NULL,
    cidade_paciente VARCHAR(45) NOT NULL,
    rua_paciente VARCHAR(45) NOT NULL,
    data_nascimento DATE NOT NULL
);

SELECT * FROM pacientes;