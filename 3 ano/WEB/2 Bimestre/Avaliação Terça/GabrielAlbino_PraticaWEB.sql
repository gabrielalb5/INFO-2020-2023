-- Avaliação Prática WEB (Terça-Feira) - Gabriel Albino
USE ifsp;

DROP TABLE IF EXISTS Reserva;
DROP TABLE IF EXISTS Voo;
DROP TABLE IF EXISTS Aeronave;
DROP TABLE IF EXISTS Cliente;

-- 5.1. Criação de todas as tabelas (todas possuem chave primária).
CREATE TABLE Cliente(
    id_cliente INT AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255),
    data_nascimento DATE NOT NULL,
    PRIMARY KEY (id_cliente)
);

CREATE TABLE Aeronave(
    id_aeronave INT AUTO_INCREMENT,
    modelo VARCHAR(255) NOT NULL,
    ano_fabricacao INT,
    qtde_assentos INT,
    PRIMARY KEY (id_aeronave)
);

CREATE TABLE Voo(
    id_voo INT AUTO_INCREMENT,
    origem VARCHAR(255) NOT NULL,
    destino VARCHAR(255) NOT NULL,
    id_aeronave INT,
    PRIMARY KEY (id_voo),
    FOREIGN KEY (id_aeronave) REFERENCES Aeronave (id_aeronave)
);

CREATE TABLE Reserva(
    id_reserva INT AUTO_INCREMENT,
    id_cliente INT,
    id_voo INT,
    data_viagem DATE,
    assento VARCHAR(255),
    tarifa INT,
    PRIMARY KEY (id_reserva),
    FOREIGN KEY (id_cliente) REFERENCES Cliente (id_cliente),
    FOREIGN KEY (id_voo) REFERENCES Voo (id_voo)
);

-- 5.2. Inserção dos dados do Cliente.
INSERT INTO Cliente (nome,email,data_nascimento) VALUES
    ("Antonio Santos","antonio@","2003-05-28"),
    ("Beatriz Souza","beatriz@","1998-12-13"),
    ("Fernanda Maria","fernanda@","2000-02-08"),
    ("Sandra Lemos","sandra@","1994-07-19"),
    ("Tatiane Paz","tatiane@","1991-09-03");

INSERT INTO Aeronave (modelo,ano_fabricacao,qtde_assentos) VALUES
    ("Airbus A320",2010,150),
    ("Airbus A330",2014,250),
    ("Boeing 767",2016,250),
    ("Boeing 787",2018,330),
    ("Airbus A380",2018,400);

INSERT INTO Voo (origem,destino,id_aeronave) VALUES
    ("CGH","SDU",1),
    ("CGH","BSB",3),
    ("POA","SDU",2),
    ("JPA","GRU",2);

INSERT INTO Reserva (id_cliente,id_voo,data_viagem,assento,tarifa) VALUES
    (1,1,"2022-11-05","3A",350),
    (2,3,"2022-11-09","10B",550),
    (3,4,"2022-12-03","18F",370),
    (1,3,"2022-12-18","9D",400);

-- Mostrando as tabelas como no arquivo
SELECT * FROM Cliente;
SELECT * FROM Aeronave;
SELECT * FROM Voo;
SELECT * FROM Reserva;

-- 5.3. Atualização do e-mail do cliente “Antonio Santos” de “antonio@” para “antoniosantos@”.
UPDATE Cliente SET email="antoniosantos@" WHERE email="antonio@";

-- Para mostrar que a alteração de email foi realizada
SELECT * FROM Cliente;