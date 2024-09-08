CREATE TABLE Produto(
    codigo INT AUTO_INCREMENT,
    nome VARCHAR(30) NOT NULL,
    preco DECIMAL(10,2) NOT NULL,
    quantidade INT NOT NULL,
    PRIMARY KEY (codigo)
);

INSERT INTO Produto (nome, preco, quantidade) VALUES
    ("caneta preta", 1.50, 100),
    ("caneta azul", 1.50, 200),
    ("caderno espiral preto", 25, 100),
    ("tesoura", 5.90, 30),
    ("cx. lápis de cor 12 cores", 19.90, 150);

UPDATE Produto SET quantidade=150 WHERE nome="caneta azul";
DELETE FROM Produto WHERE nome="tesoura";
    