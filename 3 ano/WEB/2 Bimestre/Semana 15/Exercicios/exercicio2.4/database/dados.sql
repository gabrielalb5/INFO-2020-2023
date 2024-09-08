USE ifsp;

DROP TABLE IF EXISTS Matricula;
DROP TABLE IF EXISTS Estudante;
DROP TABLE IF EXISTS Curso;

CREATE TABLE Curso(
    id_c INT AUTO_INCREMENT,
    Nome_c VARCHAR(255) NOT NULL,
    PRIMARY KEY (id_c)
);

INSERT INTO Curso (Nome_c) VALUES
    ("Informática Integrado"),
    ("Mecânica Integrado"),
    ("Licenciatura em Matemática"),
    ("ADS"),
    ("Iformática Noturno");

CREATE TABLE Estudante(
    id_e INT AUTO_INCREMENT,
    Nome_e VARCHAR(255) NOT NULL,
    Email VARCHAR(255),
    Nascimento DATE NOT NULL,
    PRIMARY KEY (id_e)
);

INSERT INTO Estudante (Nome_e,Email,Nascimento) VALUES
    ("Gabriel Albino","gabrielalbino28@gmail.com","2005-05-05"),
    ("Lara Valentim","lara.f.m.valentim@gmail.com","2004-09-01"),
    ("Pedro Henrique Ferreira","pedrohf@gmail.com","2004-11-02"),
    ("Vinícius Ferreira de Sá","vini@gmail.com","2005-10-10");

CREATE TABLE Matricula(
    id_m INT AUTO_INCREMENT,
    id_e INT,
    id_c INT,
    PRIMARY KEY (id_m),
    FOREIGN KEY (id_e) REFERENCES Estudante (id_e),
    FOREIGN KEY (id_c) REFERENCES Curso (id_c)
);

INSERT INTO Matricula (id_e,id_c) VALUES
    (1,1),(2,1),(3,2),(4,2),(4,5);