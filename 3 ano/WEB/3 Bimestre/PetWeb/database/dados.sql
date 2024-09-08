USE ifsp;
DROP TABLE IF EXISTS Pet;
DROP TABLE IF EXISTS Especie;

CREATE TABLE Especie(
    id_e INT AUTO_INCREMENT,
    Tipo VARCHAR(255),
    PRIMARY KEY (id_e)
);

INSERT INTO Especie(Tipo) VALUES
    ("Cachorro"),("Gato"),("Peixe"),
    ("Pássaro"),("Cavalo"),("Jabuti"),
    ("Cágado"),("Cobra"),("Aranha"),
    ("Lagarto"),("Coelho"),("Hamster"),
    ("Rato"),("Furão"),("Porco");

CREATE TABLE Pet(
    id_p INT AUTO_INCREMENT,
    id_e INT,
    Nome VARCHAR(255) NOT NULL,
    Raca VARCHAR(255),
    Nascimento DATE,
    Comentario VARCHAR(255),
    Adotado BOOLEAN NOT NULL,
    PRIMARY KEY (id_p),
    FOREIGN KEY (id_e) REFERENCES Especie (id_e)
);

INSERT INTO Pet (id_e,Nome,Raca,Nascimento,Comentario,Adotado) VALUES
    (1,"Bidu","Schnauzer","1959-07-18","Azul",1),
    (2,"Mingau","Angorá","1989-02-02","Branco",1),
    (15,"Chovinista","Doméstico","1963-08-25","Laranja",1),
    (8,"Python","Píton-real","2022-05-05","Albina",0);


SELECT p.id_p, p.Nome, e.Tipo, p.Raca, p.Nascimento, p.Comentario, p.Adotado
FROM Pet p
JOIN Especie e WHERE e.id_e = p.id_e;