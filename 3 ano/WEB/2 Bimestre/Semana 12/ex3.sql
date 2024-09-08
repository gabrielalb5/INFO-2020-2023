USE ifsp;

DROP TABLE IF EXISTS Matricula;
DROP TABLE IF EXISTS Disciplina;
DROP TABLE IF EXISTS Curso;
DROP TABLE IF EXISTS Estudante;

CREATE TABLE Estudante(
    nome VARCHAR(255) NOT NULL,
    genero VARCHAR(1) NOT NULL,
    cpf VARCHAR(14) NOT NULL,
    endereco VARCHAR(255),
    fone VARCHAR(13) NOT NULL,
    email VARCHAR(255) NOT NULL,
    prontuario VARCHAR(9) NOT NULL,
    PRIMARY KEY (cpf)
);

INSERT INTO Estudante (nome, genero, cpf, endereco, fone, email, prontuario) VALUES
    ("Gabriel Albino","M","450.143.078-84","Av. Carlos Teixera, 98","(16)996142354","gabrielalbino28@gmail.com","AQ3004775"),
    ("Ana Julia Jeronymo Fernandes","F","321.568.890-01","Vila Xavier","(16)997324484","jeronymo2004@gmail.com","AQ3004686"),
    ("Eduardo","E","123.456.789-00","Hortências","(16)999999999","eduardooo@gmail.com","AQ3004741"),
    ("Camilla","C","123.654.511-11","Yolanda","(16)994434411","camilluska@gmail.com","AQ3004716");

CREATE TABLE Curso(
    id_curso INT AUTO_INCREMENT,
    nome_c VARCHAR(30) NOT NULL,
    PRIMARY KEY (id_curso)
);

INSERT INTO Curso (nome_c) VALUES
    ("Tec. Informática"),
    ("Tec. Mecânica"),
    ("Mecatrônica"),
    ("Licenciatura em Matemática"),
    ("ADS");

CREATE TABLE Disciplina(
    id_disc INT AUTO_INCREMENT,
    nome_d VARCHAR(30) NOT NULL,
    PRIMARY KEY (id_disc)
);

INSERT INTO Disciplina (nome_d) VALUES
    ("WEB"),
    ("SRC"),
    ("Biologia"),
    ("Química"),
    ("Arte"),
    ("Cálculo II");

CREATE TABLE Matricula(
    cpf VARCHAR(14),
    id_curso INT,
    id_disc INT,
    FOREIGN KEY (cpf) REFERENCES Estudante(cpf),
    FOREIGN KEY (id_curso) REFERENCES Curso(id_curso),
    FOREIGN KEY (id_disc) REFERENCES Disciplina(id_disc)
);

INSERT INTO Matricula (cpf, id_curso, id_disc) VALUES
    ("450.143.078-84",1,1),
    ("450.143.078-84",1,3),
    ("450.143.078-84",1,4),
    ("321.568.890-01",5,2),
    ("123.654.511-11",2,5);

UPDATE Disciplina SET nome_d="Português" WHERE nome_d="SRC";
DELETE FROM Estudante WHERE cpf="123.456.789-00";

SELECT e.nome as Nome, c.nome_c as Curso, d.nome_d as Disciplina
FROM Matricula m
JOIN Estudante e ON m.cpf = e.cpf
JOIN Curso c ON m.id_curso = c.id_curso
JOIN Disciplina d ON m.id_disc = d.id_disc
ORDER BY e.nome