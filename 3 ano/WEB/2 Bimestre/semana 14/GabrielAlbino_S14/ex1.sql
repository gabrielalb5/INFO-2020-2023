USE ifsp;

DROP TABLE IF EXISTS Lista;
DROP TABLE IF EXISTS Historico;
DROP TABLE IF EXISTS Usuario;
DROP TABLE IF EXISTS Catalogo;

CREATE TABLE Usuario(
    id_u INT AUTO_INCREMENT,
    Email VARCHAR(255) NOT NULL,
    Senha VARCHAR(255) NOT NULL,
    Nome VARCHAR(255) NOT NULL,
    PRIMARY KEY (id_u) 
);

CREATE TABLE Catalogo(
    id_c INT AUTO_INCREMENT,
    Titulo VARCHAR(255) NOT NULL,
    Tipo VARCHAR(255) NOT NULL,
    Temporadas VARCHAR(255),
    Ano VARCHAR(4) NOT NULL,
    PRIMARY KEY (id_c)
);

CREATE TABLE Historico(
    id_h INT AUTO_INCREMENT,
    id_u INT,
    id_c INT,
    Temp INT(2),
    Episodio INT(3),
    PRIMARY KEY (id_h),
    FOREIGN KEY (id_u) REFERENCES Usuario(id_u),
    FOREIGN KEY (id_c) REFERENCES Catalogo(id_c)
);

CREATE TABLE Lista(
    id_l INT AUTO_INCREMENT,
    id_u INT,
    id_c INT,
    PRIMARY KEY(id_l),
    FOREIGN KEY (id_u) REFERENCES Usuario(id_u),
    FOREIGN KEY (id_c) REFERENCES Catalogo(id_c)
);

INSERT INTO Usuario (Email,Senha,Nome) VALUES
    ('lara.fmv7@gmail.com','ronaldo123','Lara'),
    ('eduard0@gamil.com','bertoleza','Eduardo'),
    ('camilluska@gmail.com','cake123','Camilla'),
    ('gabrielalbino28@gmail.com','luke123','Gabriel'),
    ('alex@gmail.com','alanzoka','Alex');

INSERT INTO Catalogo (Titulo,Tipo,Temporadas,Ano) VALUES
    ('Hoje Eu Quero Voltar Sozinho','Filme',NULL,2014),
    ('Breaking Bad','Série',5,2008),
    ('Tudo bem não ser normal','Série',1,2020),
    ('Heartstopper','Série',1,2022),
    ('Central do Brasil','Filme',NULL,1998),
    ('Stranger Things','Série',3,2016),
    ('O segredo de Brookeback Mountain','Filme',NULL,2005),
    ('A Maldição da Residência Hill','Série',1,2018);

INSERT INTO Historico (id_u,id_c,Temp,Episodio) VALUES
    (4,1,NULL,NULL),
    (2,2,3,5),
    (1,3,1,2),
    (3,8,1,3);

INSERT INTO Lista (id_u,id_c) VALUES
    (1,3), (1,6),
    (2,4), (2,2),
    (3,5), (3,6), (3,8),
    (4,1), (4,5), (4,7), (4,8);

UPDATE Catalogo SET Temporadas=4 WHERE Titulo='Stranger Things';
DELETE FROM Usuario WHERE Nome='Alex';

SELECT u.Nome, c.Titulo as 'Assistindo', h.Temp, h.Episodio
FROM Historico h
JOIN Usuario u ON h.id_u = u.id_u
JOIN Catalogo c ON h.id_c = c.id_c;

SELECT u.Nome, c.Titulo
FROM Lista l
JOIN Usuario u ON l.id_u = u.id_u
JOIN Catalogo c ON l.id_c = c.id_c 
WHERE Nome='Gabriel';