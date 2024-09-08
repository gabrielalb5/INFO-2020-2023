USE ifsp;

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
  id_produto    INT AUTO_INCREMENT,
  id_categoria  INT NOT NULL,
  descricao     VARCHAR(30) NOT NULL,
  data_cadastro DATE NOT NULL,
  lancamento    BOOLEAN NOT NULL,
  valor         DECIMAL(7,2) NOT NULL,
  PRIMARY KEY (id_produto),
  FOREIGN KEY (id_categoria) REFERENCES Categoria (id_categoria)  
);

INSERT INTO 
  Produto (descricao, data_cadastro, lancamento, valor, id_categoria)
VALUES
  ("Celular", CURRENT_DATE(), false, 1500, 2),
  ("Tablet", "2021-07-21", false, 900, 4),
  ("Chocolate meio amargo", "2021-07-21", false, 6, 1);

-- Consulta para recuperar os produtos e suas categorias
SELECT p.*, c.descricao as descricao_categoria
FROM Produto p
INNER JOIN Categoria c
ON p.id_categoria = c.id_categoria