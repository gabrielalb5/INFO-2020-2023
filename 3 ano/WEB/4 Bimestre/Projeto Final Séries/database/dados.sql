USE ifsp;

DROP TABLE IF EXISTS Serie;
DROP TABLE IF EXISTS Categoria;
DROP TABLE IF EXISTS Administrador;

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
    Temporadas INT NOT NULL,
    Lancamento DATE,
    Finalizada BOOLEAN NOT NULL,
    PRIMARY KEY (id_s),
    FOREIGN KEY (id_c) REFERENCES Categoria(id_c)
);

INSERT INTO Serie(id_c,Nome,Temporadas,Lancamento,Finalizada) VALUES
    (7,"Stranger Things",4,"2016-07-15",0),
    (5,"Euphoria",2,"2019-06-16",0),
    (3,"Fleabag",2,"2016-07-21",1),
    (6,"A Maldição da Residência Hill",1,"2018-10-12",1),
    (3,"The Good Place",4,"2016-09-19",1);

CREATE TABLE Administrador(
    id_a INT AUTO_INCREMENT,
    Nome VARCHAR(255) NOT NULL,
    Email VARCHAR(255) NOT NULL,
    Senha VARCHAR(255) NOT NULL,
    PRIMARY KEY (id_a)
);

INSERT INTO Administrador(Nome,Email,Senha) VALUES
    ('Gabriel','gabrielalbino28@gmail.com','827ccb0eea8a706c4c34a16891f84e7b');