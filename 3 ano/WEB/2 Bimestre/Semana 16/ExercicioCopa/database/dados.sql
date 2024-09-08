USE ifsp;

DROP TABLE IF EXISTS Pais;
DROP TABLE IF EXISTS Continente;

CREATE TABLE Continente(
    id_c INT AUTO_INCREMENT,
    NomeC VARCHAR(255) NOT NULL,
    PRIMARY KEY (id_c)
);

INSERT INTO Continente (NomeC) VALUES
    ("África"),("América"),("Ásia"),("Europa"),("Oceania");

CREATE TABLE Pais(
    id_p INT AUTO_INCREMENT,
    id_c INT,
    NomeP VARCHAR(255) NOT NULL,
    Idioma VARCHAR(255) NOT NULL,
    Moeda VARCHAR(255) NOT NULL,
    IDH INT NOT NULL,
    PRIMARY KEY (id_p),
    FOREIGN KEY (id_c) REFERENCES Continente (id_c)
);

INSERT INTO Pais (id_c,NomeP,Idioma,Moeda,IDH) VALUES
    (1,"Camarões","Francês","Franco CFA Central",153),
    (1,"Marrocos","Árabe","Dirrã marroquino",121),
    (1,"Gana","Inglês","Cedi",138),
    (2,"Brasil","Português","Real",84),
    (2,"Argentina","Espanhol","Peso argentino",46),
    (2,"Canadá","Inglês","Dólar canadense",16),
    (3,"Coréia do Sul","Coreano","Won sul-coreano",23),
    (3,"Japão","Japonês","Iene",19),
    (3,"Qatar","Árabe","Rial catariano",45),
    (4,"Alemanha","Alemão","Euro",6),
    (4,"Espanha","Espanhol","Euro",25),
    (4,"Inglaterra","Inglês","Libra esterlina",13),
    (5,"Nova Zelândia","Inglês","Dólar neozelandês",14);

-- UPDATE Pais SET Idioma="Brasileiro" WHERE NomeP="Brasil";
-- DELETE FROM Pais WHERE id_p=1;
-- SELECT c.NomeC, p.NomeP, p.Idioma, p.Moeda, p.IDH
-- FROM Pais p
-- JOIN Continente c WHERE c.id_c = p.id_c
-- ORDER BY p.IDH;