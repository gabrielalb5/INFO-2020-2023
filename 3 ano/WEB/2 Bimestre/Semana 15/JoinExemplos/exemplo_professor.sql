USE ifsp;

CREATE TABLE Montadora (
  id_montadora        INT AUTO_INCREMENT,
  descricao_montadora VARCHAR(20),
  PRIMARY KEY (id_montadora)
);

CREATE TABLE Veiculo (
  id_veiculo        INT AUTO_INCREMENT,
  descricao_veiculo VARCHAR(20),
  id_montadora      INT,
  PRIMARY KEY (id_veiculo),
  FOREIGN KEY (id_montadora) REFERENCES Montadora (id_montadora)
);

INSERT INTO Montadora(descricao_montadora)
              VALUES ("GM"),
                     ("Honda"),
                     ("Toyota"),
                     ("FIAT"),
                     ("Volkswagen"),  
                     ("Ford");                   

INSERT INTO Veiculo(descricao_veiculo, id_montadora)
            VALUES ("Gol", 5),
                   ("Argo", 4),
                   ("Onix", 1),
                   ("Civic", 2),
                   ("Sandero", Null);

/*** Inner Join ***/
SELECT M.id_montadora, M.descricao_montadora, V.id_veiculo, V.descricao_veiculo
FROM Montadora M, Veiculo V
WHERE M.id_montadora = V.id_montadora
ORDER BY M.id_montadora;

SELECT M.id_montadora, M.descricao_montadora, V.id_veiculo, V.descricao_veiculo
FROM Montadora M 
INNER JOIN Veiculo V
ON M.id_montadora = V.id_montadora
ORDER BY M.id_montadora;

/*** Left Outer Join ***/
SELECT M.id_montadora, M.descricao_montadora, V.id_veiculo, V.descricao_veiculo
FROM Montadora M 
LEFT OUTER JOIN Veiculo V
ON M.id_montadora = V.id_montadora
ORDER BY M.id_montadora;

/*** Right Outer Join ***/
SELECT M.id_montadora, M.descricao_montadora, V.id_veiculo, V.descricao_veiculo
FROM Montadora M 
RIGHT OUTER JOIN Veiculo V
ON M.id_montadora = V.id_montadora
ORDER BY M.id_montadora;

/*** Full Outer Join ***/
SELECT M.id_montadora, M.descricao_montadora, V.id_veiculo, V.descricao_veiculo
FROM Montadora M 
LEFT OUTER JOIN Veiculo V
ON M.id_montadora = V.id_montadora
UNION
SELECT M.id_montadora, M.descricao_montadora, V.id_veiculo, V.descricao_veiculo
FROM Montadora M 
RIGHT OUTER JOIN Veiculo V
ON M.id_montadora = V.id_montadora

/*** Full Outer Join com Order By ***/
SELECT *
FROM (
  SELECT M.id_montadora, M.descricao_montadora, V.id_veiculo, V.descricao_veiculo
  FROM Montadora M 
  LEFT OUTER JOIN Veiculo V
  ON M.id_montadora = V.id_montadora
  UNION
  SELECT M.id_montadora, M.descricao_montadora, V.id_veiculo, V.descricao_veiculo
  FROM Montadora M 
  RIGHT OUTER JOIN Veiculo V
  ON M.id_montadora = V.id_montadora
) alias
ORDER BY alias.id_montadora;