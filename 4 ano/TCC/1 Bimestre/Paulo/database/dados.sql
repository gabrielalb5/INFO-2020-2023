DROP DATABASE IF EXISTS getfrete;
CREATE DATABASE getfrete;

DROP TABLE IF EXISTS imagens_cliente;
DROP TABLE IF EXISTS imagens_motorista;
DROP TABLE IF EXISTS imagens_cnh;
DROP TABLE IF EXISTS cnh;
DROP TABLE IF EXISTS cliente;
DROP TABLE IF EXISTS motorista;

CREATE TABLE cliente(
    nome VARCHAR (255) NOT NULL,
    sobrenome VARCHAR (255) NOT NULL,
    nome_social VARCHAR (255) NOT NULL,
    email VARCHAR (255) NOT NULL,
    senha VARCHAR (255) NOT NULL,
    cpf TEXT(255) NOT NULL,
    telefone TEXT(255),
    uf VARCHAR(255),
    cidade VARCHAR(255),
    PRIMARY KEY (email)
);

CREATE TABLE motorista(
    nome VARCHAR (255) NOT NULL,
    sobrenome VARCHAR (255) NOT NULL,
    nome_social VARCHAR (255) NOT NULL,
    email VARCHAR (255) NOT NULL,
    senha VARCHAR (255) NOT NULL,
    cpf TEXT(255) NOT NULL,
    telefone TEXT(255),
    uf VARCHAR(255),
    cidade VARCHAR(255),
    PRIMARY KEY (email)
);

CREATE TABLE cnh(
    numero TEXT(255) NOT NULL,
    validade DATE NOT NULL,
    email VARCHAR(255),
    PRIMARY KEY (numero(255)),
    FOREIGN KEY (email) REFERENCES motorista(email)
);

CREATE TABLE imagens_cliente(
    id_i INT AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    path VARCHAR(255),
    data_upload TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    email VARCHAR(255),
    extensao VARCHAR(255),
    PRIMARY KEY (id_i),
    FOREIGN KEY (email) REFERENCES cliente(email)
);

CREATE TABLE imagens_motorista(
    id_i INT AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    path VARCHAR(255),
    data_upload TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    email VARCHAR(255),
    extensao VARCHAR(255),
    PRIMARY KEY (id_i),
    FOREIGN KEY (email) REFERENCES motorista(email)
);

CREATE TABLE imagens_cnh(
    id_i INT AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    path VARCHAR(255),
    data_upload TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    email VARCHAR(255),
    extensao VARCHAR(255),
    PRIMARY KEY (id_i),
    FOREIGN KEY (email) REFERENCES motorista(email)
);

/*CREATE TABLE CadastroCarro(
    crlv TEXT(255) (255) NOT NULL,
    placa VARCHAR (255) NOT NULL,
    cor VARCHAR (255) NOT NULL,
    modelo VARCHAR (255) NOT NULL
);
Motorista (nome,sobrenome,nome_social,email,senha,cpf,telefone) VALUES ('Lívia', 'Galli', 'Liv', 'liv@gmail.com', 'senha123', 20020020022, 16997405596); INSERT TEXT(255)O CNH (numero,validade) VALUES (40040040044,'')*/