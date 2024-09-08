USE ifsp;

DROP TABLE IF EXISTS Pais;
DROP TABLE IF EXISTS Regiao;

CREATE TABLE Regiao(
    id_r INT AUTO_INCREMENT,
    Descricao VARCHAR(255) NOT NULL,
    PRIMARY KEY (id_r)
);

INSERT INTO Regiao (Descricao)
VALUES ("América"),("África"),("Ásia"),("Europa"),("Oceania");

CREATE TABLE Pais(
    id_p INT AUTO_INCREMENT,
    id_r INT,
    Nome VARCHAR(255) NOT NULL,
    Capital VARCHAR(255) NOT NULL,
    Grupo VARCHAR(1) NOT NULL,
    PRIMARY KEY (id_p),
    FOREIGN KEY (id_r) REFERENCES Regiao(id_r)
);

INSERT INTO Pais (id_r,Nome,Capital,Grupo) VALUES
    (1,"Brasil","Brasília","G"),
    (4,"Alemanha","Berlim","E"),
    (3,"Japão","Tóquio","E");

SELECT p.id_p, p.Nome, r.Descricao as Regiao, p.Capital, p.Grupo
FROM Pais p
JOIN Regiao r
WHERE p.id_r = r.id_r