USE ifsp;

DROP TABLE IF EXISTS Venda;
DROP TABLE IF EXISTS Produto;
DROP TABLE IF EXISTS Cliente;

CREATE TABLE Cliente(
    id_c INT AUTO_INCREMENT,
    Email VARCHAR(255) NOT NULL,
    Senha VARCHAR(255) NOT NULL,
    Nome VARCHAR(255) NOT NULL,
    CPF VARCHAR(14) NOT NULL,
    PRIMARY KEY (id_c) 
);

CREATE TABLE Produto(
    id_p INT AUTO_INCREMENT,
    Descricao VARCHAR(255) NOT NULL,
    Estoque INT NOT NULL,
    Preco DECIMAL(10,2) NOT NULL,
    PRIMARY KEY (id_p)
);

CREATE TABLE Venda(
    id_v INT AUTO_INCREMENT,
    id_c INT,
    id_p INT,
    Quantidade INT NOT NULL,
    Data_Compra DATE NOT NULL,
    Frete DECIMAL(10,2) NOT NULL,
    PRIMARY KEY (id_v),
    FOREIGN KEY (id_c) REFERENCES Cliente (id_c),
    FOREIGN KEY (id_p) REFERENCES Produto (id_p)
);

INSERT INTO Cliente (Email,Senha,Nome,CPF) VALUES
    ('soler@gmail.com','onepiece','Guilherme','111.111.111-11'),
    ('liviasgalli@gmail.com','cansada','Lívia','222.222.222-22'),
    ('anaj08@gmail.com','amora123','Ana Julia','333.333.333-33'),
    ('gabrielalbino28@gmail.com','luke123','Gabriel','450.143.078-84'),
    ('alex@gmail.com','alanzoka','Alex','555.555.555-55');

INSERT INTO Produto (Descricao,Estoque,Preco) VALUES
    ('Violino 4/4',50,500),
    ('Bola de Vôlei',200,60),
    ('Mangá one piece vol. 1048',5,39.90),
    ('Coca-cola 250ml',1000,1.99),
    ('Detergente Ypê neutro 500ml',100,2.99);

INSERT INTO Venda (id_c,id_p,Quantidade,Data_Compra,Frete) VALUES
    (1,3,1,'2022-05-25',3.9),
    (2,2,1,'2022-04-04',3.9),
    (1,4,6,'2022-03-03',0),
    (4,1,1,'2022-05-05',5.99),
    (3,4,2,'2022-05-20',0),
    (4,5,1,'2022-02-05',0);

UPDATE Produto SET Estoque=4 WHERE id_p=3;
DELETE FROM Cliente WHERE Nome='Alex';

SELECT Descricao as 'Nome', Estoque, Preco as 'Valor'
FROM Produto;

SELECT c.Nome, p.Descricao as 'Produto', p.Preco as 'Valor unitário', v.Quantidade, v.Data_Compra, Frete, (v.Quantidade*p.Preco) as 'Total'
FROM Venda v
JOIN Cliente c ON v.id_c = c.id_c
JOIN Produto p ON v.id_p = p.id_p;