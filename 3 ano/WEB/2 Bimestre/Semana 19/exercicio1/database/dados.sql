USE ifsp;
DROP TABLE IF EXISTS Viagem;
DROP TABLE IF EXISTS Acomodacao;

CREATE TABLE Acomodacao(
    id_a INT AUTO_INCREMENT,
    Tipo VARCHAR(255) NOT NULL,
    PRIMARY KEY (id_a)
);

INSERT INTO Acomodacao (tipo) VALUES
    ('Albergue'),('Hotel'),('Pousada');

CREATE TABLE Viagem(
    id_v INT AUTO_INCREMENT,
    Origem VARCHAR(255) NOT NULL,
    Destino VARCHAR(255) NOT NULL,
    Periodo VARCHAR(255),
    Valor DECIMAL(10,2),
    Quantidade INT,
    id_a INT,
    Cafe BIT NOT NULL,
    Traslado BIT NOT NULL,
    PRIMARY KEY (id_v),
    FOREIGN KEY (id_a) REFERENCES Acomodacao (id_a)
);

INSERT INTO Viagem (Origem, Destino, Periodo, Valor, Quantidade, id_a, Cafe, Traslado) VALUES
    ('Araraquara','Berlim','2 semanas',5000,1,2,1,0);

SELECT v.id_v, v.Origem, v.Destino, v.Periodo, v.Valor, v.Quantidade, a.Tipo, v.Cafe, v.Traslado
FROM Viagem v 
JOIN Acomodacao a
ON v.id_a = a.id_a;