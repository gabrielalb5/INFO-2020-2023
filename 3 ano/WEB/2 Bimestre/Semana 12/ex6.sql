USE ifsp;

DROP TABLE IF EXISTS Reserva;
DROP TABLE IF EXISTS Voo;
DROP TABLE IF EXISTS Aeronave;
DROP TABLE IF EXISTS Cliente;

CREATE TABLE Cliente(
    id_c INT AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    PRIMARY KEY (id_c)
);

INSERT INTO Cliente (nome) VALUES
    ("Gabriel Albino"),
    ("Camilla Corrêa Ribeiro"),
    ("Eduardo Bonifácio"),
    ("Alex Kenned"),
    ("Lara Valentim");

CREATE TABLE Aeronave(
    id_a INT AUTO_INCREMENT,
    modelo VARCHAR(255) NOT NULL,
    ano INT NOT NULL,
    assentos INT NOT NULL,
    manutencao DATE NOT NULL,
    PRIMARY KEY (id_a)
);

INSERT INTO Aeronave (modelo,ano,assentos,manutencao) VALUES
    ("Boeing 777",2018,550,"2022-01-05"),
    ("Embraer KC-390",2019,200,"2022-02-02"),
    ("Airbus A330",2020,335,"2021-11-30");

CREATE TABLE Voo (
    id_v INT AUTO_INCREMENT,
    origem VARCHAR(255) NOT NULL,
    destino VARCHAR(255) NOT NULL,
    aeronave INT,
    PRIMARY KEY (id_v),
    FOREIGN KEY (aeronave) REFERENCES Aeronave(id_a)
);

INSERT INTO Voo (origem,destino,aeronave) VALUES
    ("GRU","YTZ",3),
    ("CGH","CDG",1),
    ("GRU","MAO",2);

CREATE TABLE Reserva (
    id_r INT AUTO_INCREMENT,
    id_c INT,
    id_a INT,
    id_v INT,
    PRIMARY KEY (id_r),
    FOREIGN KEY (id_c) REFERENCES Cliente(id_c),
    FOREIGN KEY (id_a) REFERENCES Aeronave(id_a),
    FOREIGN KEY (id_v) REFERENCES Voo(id_v)
);

INSERT INTO Reserva (id_c,id_a,id_v) VALUES
    (1,1,3),
    (2,2,1),
    (4,3,2);

UPDATE Aeronave SET manutencao="2022-05-15" WHERE id_a=3;
DELETE FROM Cliente WHERE nome="Eduardo Bonifácio";

SELECT r.id_r as 'Código Reserva', c.nome as 'Nome', v.origem, v.destino, a.modelo as 'Aeronave'
FROM Reserva r
JOIN Cliente c ON r.id_c = c.id_c
JOIN Aeronave a ON r.id_a = a.id_a
JOIN Voo v ON r.id_v = v.id_v