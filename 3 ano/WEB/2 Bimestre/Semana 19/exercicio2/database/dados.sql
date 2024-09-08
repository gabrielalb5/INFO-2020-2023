USE ifsp;
DROP TABLE IF EXISTS Evento;
DROP TABLE IF EXISTS Tipo;

CREATE TABLE Tipo(
    id_t INT AUTO_INCREMENT,
    Nome VARCHAR(255) NOT NULL,
    PRIMARY KEY (id_t)
);

INSERT INTO Tipo (Nome) VALUES
    ("Palestra"),("Curso"),("Workshop"),("Concurso");

CREATE TABLE Evento(
    id_e INT AUTO_INCREMENT,
    id_t INT,
    Descricao VARCHAR(255),
    Organizador VARCHAR(255),
    Participante VARCHAR(255),
    PRIMARY KEY (id_e),
    FOREIGN KEY (id_t) REFERENCES Tipo (id_t)
);

INSERT INTO Evento (id_t,Descricao,Organizador,Participante) VALUES
    (4,"Concurso HQ de briga","Silva João","Gabriel Albino"),
    (1,"Por que Jojo é uma obra-prima?","Gabriel Albino","Lívia Galli");

SELECT e.id_e, t.Nome, e.Descricao, e.Organizador, e.Participante
FROM Evento e
JOIN Tipo t
ON e.id_t=t.id_t;