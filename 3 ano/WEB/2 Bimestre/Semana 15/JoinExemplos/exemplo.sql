USE ifsp;

DROP TABLE IF EXISTS Veiculo;
DROP TABLE IF EXISTS Montadora;

CREATE TABLE Montadora(
    id_montadora INT AUTO_INCREMENT,
    descricao_montadora VARCHAR(255),
    PRIMARY KEY (id_montadora)
);

CREATE TABLE Veiculo(
    id_veiculo INT NOT NULL,
    descricao_veiculo VARCHAR(255),
    id_montadora INT,
    PRIMARY KEY (id_veiculo),
    FOREIGN KEY (id_montadora) REFERENCES Montadora(id_montadora)
);

INSERT INTO Montadora(descricao_montadora) VALUES
    ('GM'),('Honda'),('Toyota'),('FIAT'),('Volkswagen'),('Ford');

INSERT INTO Veiculo VALUES
    (10,'Gol',5),
    (20,'Argo',4),
    (30,'Onix',1),
    (40,'Yaris',2),
    (50,'Sandero',NULL);

SELECT M.id_montadora, M.descricao_montadora, V.id_veiculo, V.descricao_veiculo
FROM Montadora M
INNER JOIN Veiculo V
ON M.id_montadora = V.id_montadora
ORDER BY M.id_montadora;

SELECT M.id_montadora, M.descricao_montadora, V.id_veiculo, V.descricao_veiculo
FROM Montadora M
LEFT OUTER JOIN Veiculo V
ON M.id_montadora = V.id_montadora
ORDER BY M.id_montadora;

SELECT M.id_montadora, M.descricao_montadora, V.id_veiculo, V.descricao_veiculo
FROM Montadora M
RIGHT OUTER JOIN Veiculo V
ON M.id_montadora = V.id_montadora
ORDER BY M.id_montadora;

SELECT M.id_montadora, M.descricao_montadora, V.id_veiculo, V.descricao_veiculo
FROM Montadora M
LEFT OUTER JOIN Veiculo V
ON M.id_montadora = V.id_montadora
UNION
SELECT M.id_montadora, M.descricao_montadora, V.id_veiculo, V.descricao_veiculo
FROM Montadora M
RIGHT OUTER JOIN Veiculo V
ON M.id_montadora = V.id_montadora