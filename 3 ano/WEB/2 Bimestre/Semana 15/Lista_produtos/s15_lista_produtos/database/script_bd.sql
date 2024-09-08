USE shoppingvirtual;

CREATE TABLE Produto (
  id_produto INT AUTO_INCREMENT,
  descricao  VARCHAR(30) NOT NULL,
  valor      DECIMAL(7,2) NOT NULL,
  PRIMARY KEY (id_produto)
);

INSERT INTO 
  Produto (descricao, valor)
VALUES
  ("Celular", 1500),
  ("Tablet", 900),
  ("Chocolate meio amargo", 6);