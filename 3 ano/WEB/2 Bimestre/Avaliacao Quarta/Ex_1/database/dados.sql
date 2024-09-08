USE ifsp;

DROP TABLE IF EXISTS Mesario;

CREATE TABLE Mesario(
    id_fiscal INT AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    fone VARCHAR(255),
    nro_inscricao INT NOT NULL,
    zona INT NOT NULL,
    secao INT NOT NULL,
    PRIMARY KEY (id_fiscal)
);

INSERT INTO Mesario (nome,fone,nro_inscricao,zona,secao) VALUES
    ("Luiz Carlos","(16)912334-2233",123456,170,0100),
    ("Maria Silva","(16)95678-5566",789012,210,0102),
    ("Sabrina Portela","(16)99012-7788",345678,230,0103);

SELECT * FROM Mesario; 