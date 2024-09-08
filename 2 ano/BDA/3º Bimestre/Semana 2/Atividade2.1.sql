DROP TABLE IF EXISTS cliente;

CREATE TABLE IF NOT EXISTS cliente (
  cpf DECIMAL(11, 0) NOT NULL,
  nome VARCHAR(30) NOT NULL,
  rg VARCHAR(10),
  data_nascimento DATE,
  sexo char,
  telefone decimal(20, 0),
  CONSTRAINT pk_cpf primary key (cpf)
);

DROP TABLE IF EXISTS pedido;

CREATE TABLE IF NOT EXISTS pedido (
  codigo int not NULL,
  data_emissa date not NULL,
  cpf_cliente decimal(11, 0) not NULL,
  CONSTRAINT pk_codigo PRIMARY key (codigo), 
  CONSTRAINT fk_cpf_cliente foreign key (cpf_cliente)
  	REFERENCES cliente (cpf)
  	on UPDATE CASCADE
);

DROP TABLE IF EXISTS produto;

CREATE TABLE IF NOT EXISTS produto (
  codigo int not NULL,
  descricao varchar(80) not NULL,
  valor decimal(10, 2) not NULL,
  constraint pk_codigo PRIMARY key (codigo)
);

DROP TABLE IF EXISTS pedido_produto;

CREATE TABLE IF NOT EXISTS pedido_produto (
  codigo_pedido int NOT NULL,
  codigo_produto int not NULL,
  quantidade int not NULL,
  CONSTRAINT pk_codigo_produto primary key (codigo_pedido, codigo_produto),
  CONSTRAINT fk_codigo_pedido FOREIGN KEY (codigo_pedido)
  	REFERENCES pedido (codigo)
  	ON UPDATE CASCADE,
  CONSTRAINT fk_codigo_produto FOREIGN KEY (codigo_produto)
  	REFERENCES produto (codigo)
  	ON UPDATE CASCADE
);