--DROP DATABASE IF EXITS biblioteca;
--CREATE DATABASE IF NOT EXISTS biblioteca;
--USE biblioteca;
--Utilizo o sqlite.com portanto não crio o database como recomendado pela professora.

-- Tabelas
drop table if exists Palavra_chave;
CREATE TABLE if not exists Palavra_chave(
  palavra_chave VARCHAR(50) NOT NULL,  
  descrição VARCHAR(100) NOT NULL,
  CONSTRAINT pk_palavra_chave PRIMARY key (palavra_chave)
);

drop table if exists Área_conhecimento;
CREATE TABLE if not exists Área_conhecimento(
  código INT NOT NULL,
  área_conhecimento VARCHAR(100) NOT NULL,
  CONSTRAINT pk_código primary key (código)
);

drop TABLE if exists Usuário;
CREATE table if NOT exists Usuário(
  prontuário VARCHAR(9) NOT NULL,
  nome Varchar(25) not NULL,
  sobrenome varchar(25) not NULL,
  email varchar(50),
  CONSTRAINT pk_prontuário primary key (prontuário)
);

DROP TABLE IF EXISTS Editora;
create table if not exists Editora(
  nome VARCHAR(30) NOT NULL,
  endereço Varchar(50),
  CONSTRAINT pk_nome PRIMARY KEY (nome)
);

drop table if EXISTS Livro;
CREATE table if not exists Livro(
  ISBN INT NOT NULL,
  título Varchar(100) not NULL,
  edição INT NOT NULL,
  nome_editora varchar(30) not NULL,
  CONSTRAINT pk_ISBN PRIMARY KEY (ISBN),
  CONSTRAINT fk_nome_editora FOREIGN key (nome_editora)
  	REFERENCES Editora (nome)
  	ON UPDATE CASCADE
);

DROP TABLE IF EXISTS Autor;
CREATE TABLE IF NOT EXISTS Autor(
  código INT NOT NULL,
  nome varchar(25) not NULL,
  sobrenome varchar(25) not NULL,
  CONSTRAINT pk_código PRIMARY key (código)
);

drop table if EXISTS Exemplar;
CREATE table if not exists Exemplar(
  número int not NULL,
  ISBN INT NOT NULL,
  corredor char,
  estante int,
  CONSTRAINT pk_número primary key (número),
  CONSTRAINT fk_ISBN FOREIGN KEY (ISBN)
  	REFERENCES Livro (ISBN)
  	ON UPDATE CASCADE
);

drop table if EXISTS Empréstimo;
CREATE table if not exists Empréstimo(
  data_hora_retirada date not NULL,
  prontuário VARCHAR(9) NOT NULL,
  data_devolução date,
  estado varchar(15),
  multa decimal(10, 2),
  CONSTRAINT pk_data_hora_retirada primary key (data_hora_retirada),
  CONSTRAINT fk_prontuário FOREIGN key (prontuário)
  	REFERENCES Usuário (prontuário)
  	on update cascade
);

DROP TABLE IF EXISTS Livro_Palavra_chave;
CREATE TABLE IF NOT EXISTS Livro_Palavra_chave(
  palavra VARCHAR(50) NOT NULL,
  ISBN INT NOT NULL,
  CONSTRAINT pk_palavra_ISBN PRIMARY KEY (palavra, ISBN),
  CONSTRAINT fk_palavara FOREIGN key (palavra)
  	REFERENCES Palavra_chave (palavra_chave)
  	ON UPDATE CASCADE,
  CONSTRAINT fk_ISBN FOREIGN KEY (ISBN)
  	REFERENCES Livro (ISBN)
  	ON UPDATE CASCADE
);

DROP TABLE IF EXISTS Livro_Autor;
CREATE TABLE IF NOT EXISTS Livro_Autor(
  código_autor INT NOT NULL,
  ISBN INT NOT NULL,
  CONSTRAINT pk_código_autor_ISBN PRIMARY KEY (código_autor, ISBN),
  CONSTRAINT fk_código_autor FOREIGN KEY (código_autor)
  	REFERENCES Autor (código)
  	ON UPDATE CASCADE,
  CONSTRAINT fk_ISBN FOREIGN KEY (ISBN)
  	REFERENCES Livro (ISBN)
  	ON UPDATE CASCADE
);


DROP TABLE IF EXISTS Livro_Área_conhecimento;
CREATE TABLE IF NOT EXISTS Livro_Área_conhecimento(
  código_área INT NOT NULL,
  ISBN INT NOT NULL,
  CONSTRAINT pk_código_área_ISBN PRIMARY KEY (código_área, ISBN),
  CONSTRAINT fk_código_área FOREIGN KEY (código_área)
  	REFERENCES Área_conhecimento (código)
  	ON UPDATE CASCADE,
  CONSTRAINT fk_ISBN FOREIGN KEY (ISBN)
  	REFERENCES Livro (ISBN)
  	ON UPDATE CASCADE
); 

DROP TABLE IF EXISTS Empréstimo_Exemplar;
CREATE TABLE IF NOT EXISTS Empréstimo_Exemplar(
  data_hora_retirada date not NULL,
  prontuário VARCHAR(9) NOT NULL,
  número int not NULL,
  ISBN INT NOT NULL,
  data_devolvido DATE,
  CONSTRAINT pk_data_prontuário_número_ISBN PRIMARY KEY (data_hora_retirada, prontuário, número, ISBN),
  CONSTRAINT fk_data_hora_retirada FOREIGN KEY (data_hora_retirada)
    REFERENCES Empréstimo (data_hora_retirada)
    on UPDATE CASCADE,
  CONSTRAINT fk_prontuário FOREIGN key (prontuário)
    REFERENCES Empréstimo (prontuário)
    on UPDATE CASCADE,
  CONSTRAINT fk_número FOREIGN key (número)
    references Exemplar (número)
    on UPDATE CASCADE,
  CONSTRAINT fk_ISBN FOREIGN KEY (ISBN)
    REFERENCES Livro (ISBN)
    ON UPDATE CASCADE
);

-- Inserção de dados
INSERT INTO Palavra_chave VALUES
('Redes', 'Redes de computadores');
SELECT * FROM Palavra_chave;

INSERT INTO Área_conhecimento VALUES
(1234, 'Ciência da computação');
SELECT * FROM Área_conhecimento;

INSERT INTO Usuário VALUES
('aq12345', 'Orlando', 'Norris', 'norris@ig.com');
SELECT * FROM Usuário;

INSERT INTO Editora VALUES
('Ática', 'Rua nove, 8 Itu-SP');
select * from Editora;

INSERT INTO Livro VALUES
(987456, 'IoT', 3, 'Ática');
SELECT * from Livro;

INSERT into Autor VALUES
(258, 'Charles', 'Leclerc');
SELECT * from Autor;

INSERT INTO Exemplar Values 
(1, 987456, 'C', 4);
SELECT * FROM Exemplar;

INSERT INTO Empréstimo VALUES
('15/05/2021 08:00', 'aq12345', '08/06/2021', 'Pendente', '25,00');
SELECT * from Empréstimo;

INSERT INTO Livro_Palavra_chave VALUES
('Redes', 987456);
SELECT * from Livro_Palavra_chave;

INSERT into Livro_Autor VALUES
(258, 987456);
SELECT * from Livro_Autor;

Insert into Livro_Área_conhecimento values 
(1234, 987456);
SELECT * from Livro_Área_conhecimento;

INSERT into Empréstimo_Exemplar VALUES
('15/05/2021 08:00', 'aq12345', 1, 987456, NULL);
SELECT * from Empréstimo_Exemplar;