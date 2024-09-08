USE ifsp;

DROP TABLE IF EXISTS Serie;
DROP TABLE IF EXISTS Categoria;

CREATE TABLE Categoria(
    id_c INT AUTO_INCREMENT,
    Descricao VARCHAR(255),
    PRIMARY KEY (id_c)
);

INSERT INTO Categoria(Descricao) VALUES
    ("Aventura"),
    ("Romance"),
    ("Comédia"),
    ("Sitcom"),
    ("Drama"),
    ("Terror"),
    ("Suspense");

CREATE TABLE Serie(
    id_s INT AUTO_INCREMENT,
    id_c INT,
    Nome VARCHAR(255) NOT NULL,
    Lancamento INT(4) NOT NULL,
    Temporadas INT NOT NULL,
    PRIMARY KEY (id_s),
    FOREIGN KEY (id_c) REFERENCES Categoria(id_c)
);

INSERT INTO Serie(id_c,Nome,Lancamento,Temporadas) VALUES
    (7,"Stranger Things",2016,4),
    (5,"Euphoria",2019,2),
    (3,"Fleabag",2016,2),
    (6,"A Maldição da Residência Hill",2018,1),
    (3,"The Good Place",2016,4);