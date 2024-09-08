USE ifsp;
DROP TABLE IF EXISTS Participante;
DROP TABLE IF EXISTS Funcao;

CREATE TABLE Funcao(
    id_funcao INT AUTO_INCREMENT,
    descricao VARCHAR(255) NOT NULL,
    PRIMARY KEY (id_funcao)
);

CREATE TABLE Participante(
    id_participante INT AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    empresa VARCHAR(255) NOT NULL,
    funcao INT,
    diaria DECIMAL(10,2) NOT NULL,
    PRIMARY KEY (id_participante),
    FOREIGN KEY (funcao) REFERENCES Funcao (id_funcao)
);

INSERT INTO Funcao (descricao) VALUES
    ("Estudante"),("Gerente"),("Programador"),("Testador");

INSERT INTO Participante (nome,empresa,funcao,diaria) VALUES
    ("Diego Lajes","Amdocs",3,120.00),
    ("Fernanda Brasil","IFSP",1,150.00),
    ("Samira Matos","DXC",4,120.00);

SELECT p.id_participante, p.nome, p.empresa, f.descricao as 'funcao', p.diaria
FROM Participante p
JOIN Funcao f
ON p.funcao = f.id_funcao
ORDER BY id_participante;