USE shoppingvirtual;
DROP TABLE IF EXISTS Produto;
DROP TABLE IF EXISTS Categoria;

CREATE TABLE Categoria (
  id_categoria INT AUTO_INCREMENT,
  descricao    VARCHAR(30) NOT NULL,
  PRIMARY KEY (id_categoria)
);

INSERT INTO 
  Categoria (descricao)
VALUES
  ("Alimentos"),
  ("Celulares"),
  ("Esporte"),  
  ("Informática"),
  ("Livros"),
  ("Papelaria");

CREATE TABLE Produto (
  id_produto   INT AUTO_INCREMENT,
  id_categoria INT NOT NULL,
  descricao    VARCHAR(30) NOT NULL,
  valor        DECIMAL(7,2) NOT NULL,
  PRIMARY KEY (id_produto),
  FOREIGN KEY (id_categoria) REFERENCES Categoria (id_categoria)  
);

INSERT INTO 
  Produto (descricao, valor, id_categoria)
VALUES
  ("Celular", 1500, 2),
  ("Tablet", 900, 4),
  ("Chocolate meio amargo", 6, 1);

-- Consulta para recuperar os produtos e suas categorias
SELECT p.descricao, p.valor, c.descricao as descricao_categoria
FROM Produto p
INNER JOIN Categoria c
ON p.id_categoria = c.id_categoria;

-- Para adicionar o campo data_cadastro:
ALTER TABLE Produto 
ADD data_cadastro DATE NOT NULL DEFAULT '2022-08-10';
-- Na versão 8, o MySQL permite a utilização de DEFAULT (CURRENT_DATE())