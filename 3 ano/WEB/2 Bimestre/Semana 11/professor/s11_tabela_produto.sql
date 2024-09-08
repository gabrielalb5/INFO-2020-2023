USE ifsp;

CREATE TABLE Produto (
  id_produto INT AUTO_INCREMENT,
  descricao  VARCHAR(30) NOT NULL,
  valor      DECIMAL(7,2) NOT NULL,
  PRIMARY KEY (id_produto)
);

INSERT INTO 
  Produto (descricao, valor)
VALUES
  ("Celular", 1300),
  ("Tablet", 950),
  ("Chocolate meio amargo", 6);

-- Consulta para recuperar os produtos
SELECT p.*
FROM Produto p

-- Para adicionar o campo lançamento:
ALTER TABLE Produto 
ADD lancamento BOOLEAN NOT NULL DEFAULT false;

-- Para adicionar o campo data_cadastro:
ALTER TABLE Produto 
ADD data_cadastro DATE NOT NULL DEFAULT '2022-05-03';
-- Na versão 8, o MySQL permite a utilização de DEFAULT (CURRENT_DATE())