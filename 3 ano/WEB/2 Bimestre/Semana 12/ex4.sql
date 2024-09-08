USE ifsp;

DROP TABLE IF EXISTS Assistindo;
DROP TABLE IF EXISTS Usuario;
DROP TABLE IF EXISTS Serie;

CREATE TABLE Serie(
    id_s INT AUTO_INCREMENT,
    nome_s VARCHAR(255),
    PRIMARY KEY (id_s)
);

INSERT INTO Serie (nome_s) VALUES
    ("Sex Education"),
    ("La Casa de Papel"),
    ("Grey's Anatomy"),
    ("Black Mirror"),
    ("The Good Place"),
    ("DARK");

CREATE TABLE Usuario(
    id_u INT AUTO_INCREMENT,
    nome_u VARCHAR(255),
    PRIMARY KEY (id_u)
);

INSERT INTO Usuario (nome_u) VALUES
    ("Ana Julia"),
    ("Gabriel Souza Mota"),
    ("Guilherme Schulz Soler"),
    ("Ednelson Fernandes Souza"),
    ("Camilla Corrêa RIbeiro");

CREATE TABLE Assistindo(
    id_u INT,
    id_s INT,
    FOREIGN KEY (id_u) REFERENCES Serie(id_u),
    FOREIGN KEY (id_s) REFERENCES Usuario(id_s)
);

INSERT INTO Assistindo (id_u, id_s)VALUES
    (1,6),
    (2,3),
    (3,6),
    (4,1),
    (5,4);

UPDATE Usuario SET nome_u="Ana Julia Jeronymo" WHERE id_u=1;
DELETE FROM Assistindo WHERE id_u=2;

SELECT u.nome_u as Nome, s.nome_s as Série
FROM Assistindo a
JOIN Usuario u ON a.id_u = u.id_u
JOIN Serie s ON a.id_s = s.id_s