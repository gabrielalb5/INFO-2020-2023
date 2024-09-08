USE ifsp;
DROP TABLE IF EXISTS Reservas;
DROP TABLE IF EXISTS Voo;
DROP TABLE IF EXISTS Aeronave;
DROP TABLE IF EXISTS Cliente;

CREATE TABLE Cliente(
    CodCliente INT AUTO_INCREMENT,
    Nome VARCHAR(255) NOT NULL,
    SobreNome VARCHAR(255) NOT NULL,
    DataNasc DATE NOT NULL,
    Genero VARCHAR(1) NOT NULL,
    PRIMARY KEY (CodCliente)
);

INSERT INTO Cliente(Nome,SobreNome,DataNasc,Genero) VALUES
    ("Antonio","Souza","1997-12-3","M"),
    ("Beatriz","Santos","2001-07-21","F"),
    ("Sandra","Paz","2003-05-25","F"),
    ("Tatiana","Lemos","1993-04-12","F");

CREATE TABLE Aeronave(
    CodAeronave INT AUTO_INCREMENT,
    Modelo VARCHAR(255) NOT NULL,
    AnoFabricacao INT NOT NULL,
    NumeroAssentos INT NOT NULL,
    UltimaManutencao DATE,
    PRIMARY KEY (CodAeronave)
);

INSERT INTO Aeronave(Modelo,AnoFabricacao,NumeroAssentos,UltimaManutencao) VALUES
    ("Airbus A320",2010,150,NULL),
    ("Airbus A330",2014,250,NULL),
    ("Boeing 767",2006,250,NULL),
    ("Boeing 787",2018,330,NULL);

CREATE TABLE Voo(
    CodVoo INT AUTO_INCREMENT,
    Origem VARCHAR(255) NOT NULL,
    Destino VARCHAR(255) NOT NULL,
    CodAeronave INT,
    PRIMARY KEY (CodVoo),
    FOREIGN KEY (CodAeronave) REFERENCES Aeronave(CodAeronave)
);

INSERT INTO Voo(Origem,Destino,CodAeronave) VALUES
    ("CGH","SDU",1),
    ("CGH","BSB",3),
    ("POA","SDU",2),
    ("SDU","GRU",2);

CREATE TABLE Reservas(
    CodReserva INT AUTO_INCREMENT,
    CodCliente INT,
    CodVoo INT,
    DataViagem DATE NOT NULL,
    Assento VARCHAR(255) NOT NULL,
    Tarifa DECIMAL(10,2) NOT NULL,
    PRIMARY KEY (CodReserva),
    FOREIGN KEY (CodCliente) REFERENCES Cliente(CodCliente),
    FOREIGN KEY (CodVoo) REFERENCES Voo(CodVoo)
);

INSERT INTO Reservas(CodCliente,CodVoo,DataViagem,Assento,Tarifa) VALUES
    (1,1,"2021-11-5","3A",350),
    (2,3,"2021-11-9","10B",550),
    (3,4,"2021-11-28","18F",370);

-- a) Escreva o código SQL para incluir as informações representadas acima na tabela Cliente.
-- Inserts feitos acima.

-- b) Qual é o valor total das reservas?
SELECT COUNT(*) as 'Total Reservas'
FROM Reservas

-- c) Qual é o número total de Aeronaves?
SELECT COUNT(*) as 'Total Aeronaves'
FROM Aeronave

-- d) Qual é o valor médio das reservas entre os dias 05 e 10 de novembro?
SELECT AVG(Tarifa) as 'Média Tarifa'
FROM Reservas
WHERE DataViagem BETWEEN '2021-11-05' AND '2021-11-10'

-- e) Liste o modelo da Aeronave que possui o código 3.
SELECT Modelo
FROM Aeronave
WHERE CodAeronave = 3

-- f) Liste o modelo da Aeronave utilizada pelo voo de código 3.
SELECT Modelo
FROM Aeronave a
JOIN Voo v ON v.CodAeronave = a.CodAeronave
WHERE CodVoo = 3

-- g) Liste a data da viagem reservada pelo cliente Antonio Souza
SELECT DataViagem
FROM Reservas r
JOIN Cliente c ON r.CodCliente = c.CodCliente
WHERE Nome = "Antonio" AND SobreNome = "Souza"