CREATE DATABASE atv17_crud_db;

USE atv17_crud_db;

CREATE TABLE medicos (
	id_medico INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nome_medico VARCHAR(45) NOT NULL,
    rua_medico VARCHAR(45) NOT NULL,
    numero_medico VARCHAR(45) NOT NULL,
    complemento_medico VARCHAR(45) NOT NULL,
    bairro_medico VARCHAR(45) NOT NULL,
    cep_medico VARCHAR(45) NOT NULL,
    email_medico VARCHAR(45) NOT NULL,
    telefone_fixo_medico VARCHAR(45) NOT NULL,
    telefone_celular_medico VARCHAR(45) NOT NULL,
    telefone_secundario_medico VARCHAR(45) NOT NULL
);

select * from medicos;

delete from medicos where id_medico = 5;