CREATE TABLE Cliente(
    id_c INT AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL,
    cpf INT(11) NOT NULL,
    email VARCHAR(30) NOT NULL,
    PRIMARY KEY (id_c)
);

INSERT INTO Cliente (nome, cpf, email) VALUES
    ("Gabriel Albino", 45014307884, "gabrielalbino28@gmail.com"),
    ("Lara Valentim", 12345678900, "larav@gmail.com"),
    ("Camilla Corrêa", 66688899922, "camilla8@gmail.com");

CREATE TABLE Produto(
    id_p INT AUTO_INCREMENT,
    descricao VARCHAR(30) NOT NULL,
    preco DECIMAL(10,2) NOT NULL,
    estoque INT(10) NOT NULL,
    PRIMARY KEY (id_p)
);

INSERT INTO Produto (descricao, preco, estoque) VALUES
    ("Box senhor dos anéis", 89.90, 30),
    ("Caneta preta bic", 1.50, 1000),
    ("Caderno preto", 24.90, 200),
    ("Folhas A4 - 100f", 20, 500);

CREATE TABLE Venda(
    id_venda INT AUTO_INCREMENT,
    id_c INT,
    id_p INT,
    quantidade INT(10) NOT NULL,
    preco_v DECIMAL(10,2),
    PRIMARY KEY (id_venda),
    CONSTRAINT FOREIGN KEY (id_c) REFERENCES Cliente (id_c),
    CONSTRAINT FOREIGN KEY (id_p) REFERENCES Produto (id_p)
);

INSERT INTO Venda (id_c, id_p, quantidade, preco_v) VALUES
    (1, 1, 1, 89.90),
    (1, 2, 3, 4.50),
    (2, 3, 1, 24.90),
    (3, 2, 2, 3),
    (1, 4, 1, 20);

SELECT nome as Nome, descricao as Produto, quantidade as Quantidade, preco as Preço, preco_v as Total FROM Venda 
INNER JOIN Cliente ON Venda.id_c = Cliente.id_c
INNER JOIN Produto ON Venda.id_p = Produto.id_p