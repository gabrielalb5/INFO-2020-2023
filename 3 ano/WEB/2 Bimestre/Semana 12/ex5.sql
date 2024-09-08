USE ifsp;

DROP TABLE IF EXISTS Conta;
DROP TABLE IF EXISTS Banco;
DROP TABLE IF EXISTS Cliente;

CREATE TABLE Banco(
    id_b INT NOT NULL,
    nome_b VARCHAR(255) NOT NULL,
    PRIMARY KEY (id_b)
);

INSERT INTO Banco VALUES
    (001, "Banco do Brasil"),
    (033, "Santander"),
    (077, "Inter"),
    (104, "Caixa Econômica Federal"),
    (237, "Bradesco"),
    (260, "Nubank"),
    (341, "Itaú");

CREATE TABLE Cliente(
    id_c INT AUTO_INCREMENT,
    nome_c VARCHAR(255) NOT NULL,
    data_abertura DATE NOT NULL,
    data_encerramento DATE,
    tipo VARCHAR(255),
    saldo DECIMAL(10,2),
    PRIMARY KEY (id_c)
);

INSERT INTO Cliente (nome_c,data_abertura,data_encerramento,tipo,saldo) VALUES
    ("Gabriel","2022-04-13","2032-05-05","Corrente",20.00),
    ("Lara","2022-03-10","2032-03-03","Corrente",10.00),
    ("Edilson","2015-05-05",NULL,"Poupança",250000.00),
    ("Alex","2022-05-15","2029-05-15","Salário",1500.00);

CREATE TABLE Conta(
    id_b INT,
    id_c INT,
    FOREIGN KEY (id_b) REFERENCES Banco (id_b),
    FOREIGN KEY (id_c) REFERENCES Cliente (id_c)
);

INSERT INTO Conta (id_b,id_c) VALUES
    (077,1),
    (260,2),
    (341,3),
    (033,4);

UPDATE Cliente SET nome_c="Gabriel Albino" WHERE id_c=1;
DELETE FROM Banco WHERE id_b=237;

SELECT c.nome_c as 'Cliente', b.nome_b as 'Banco', c.tipo as 'Tipo da conta', c.saldo AS 'Saldo'
FROM Conta ct
JOIN Banco b ON ct.id_b = b.id_b
JOIN Cliente c ON ct.id_c = c.id_c