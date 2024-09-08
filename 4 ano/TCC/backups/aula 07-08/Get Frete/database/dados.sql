DROP DATABASE IF EXISTS getfrete;
CREATE DATABASE getfrete;

DROP TABLE IF EXISTS historico;
DROP TABLE IF EXISTS proposta;
DROP TABLE IF EXISTS pedido;
DROP TABLE IF EXISTS categoria_pedido;
DROP TABLE IF EXISTS veiculo;
DROP TABLE IF EXISTS tipo_veiculo;
DROP TABLE IF EXISTS cnh;
DROP TABLE IF EXISTS cliente;
DROP TABLE IF EXISTS motorista;

CREATE TABLE cliente(
    nome VARCHAR (255) NOT NULL,
    sobrenome VARCHAR (255) NOT NULL,
    email VARCHAR (255) NOT NULL,
    senha VARCHAR (255) NOT NULL,
    cpf TEXT(255) NOT NULL,
    telefone TEXT(255),
    uf VARCHAR(255),
    cidade VARCHAR(255),
    imagem VARCHAR(255),
    recuperar_senha VARCHAR(255),
    PRIMARY KEY (email)
);

CREATE TABLE motorista(
    nome VARCHAR (255) NOT NULL,
    sobrenome VARCHAR (255) NOT NULL,
    email VARCHAR (255) NOT NULL,
    senha VARCHAR (255) NOT NULL,
    cpf TEXT(255) NOT NULL,
    telefone TEXT(255),
    uf VARCHAR(255),
    cidade VARCHAR(255),
    pagamentos VARCHAR(255),
    imagem VARCHAR(255),
    recuperar_senha VARCHAR(255),
    PRIMARY KEY (email)
);

CREATE TABLE cnh(
    numero TEXT(255) NOT NULL,
    validade DATE NOT NULL,
    email VARCHAR(255),
    imagem VARCHAR(255),
    PRIMARY KEY (numero(255)),
    FOREIGN KEY (email) REFERENCES motorista(email)
);

CREATE TABLE tipo_veiculo(
    id_tv INT AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    PRIMARY KEY (id_tv)
);
INSERT INTO tipo_veiculo (nome) VALUES
 ("Carro"),
 ("Carretinha"),
 ("Van compacta"),
 ("Caminhonete"),
 ("Furgão/Van"),
 ("Caminhão 3/4"),
 ("Caminhão toco"),
 ("Caminhão truck");

CREATE TABLE veiculo(
    renavam VARCHAR(255) NOT NULL,
    tipo  INT NOT NULL,
    marca VARCHAR(255) NOT NULL,
    modelo VARCHAR(255) NOT NULL,
    placa VARCHAR(255) NOT NULL,
    ano INT NOT NULL,
    cor VARCHAR(255) NOT NULL,
    email VARCHAR(255),
    PRIMARY KEY (renavam(255)),
    FOREIGN KEY (email) REFERENCES motorista(email),
    FOREIGN KEY (tipo) REFERENCES tipo_veiculo(id_tv)
);

CREATE TABLE categoria_pedido(
    id_cp INT AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    PRIMARY KEY (id_cp)
);

INSERT INTO categoria_pedido (nome) VALUES
 ("Entulho"),
 ("Matéria-prima"),
 ("Mudança comercial"),
 ("Mudança residencial"),
 ("Móvel ou Eletrodoméstico"),
 ("Entrega de objetos pequenos"),
 ("Transporte especializado (frágil)"),
 ("Outro");

CREATE TABLE pedido(
    id_p INT AUTO_INCREMENT,
    cliente VARCHAR(255) NOT NULL,
    motorista VARCHAR(255),
    veiculo VARCHAR(255),
    descricao VARCHAR(255),
    origem VARCHAR(255) NOT NULL,
    destino VARCHAR(255) NOT NULL,
    categoria INT NOT NULL,
    horario TIME NOT NULL,
    data_entrega DATE NOT NULL,
    data_pedido TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    valor DECIMAL(10,2),
    status VARCHAR(255),
    PRIMARY KEY (id_p),
    FOREIGN KEY (cliente) REFERENCES cliente(email),
    FOREIGN KEY (motorista) REFERENCES motorista(email),
    FOREIGN KEY (veiculo) REFERENCES veiculo(renavam),
    FOREIGN KEY (categoria) REFERENCES categoria_pedido(id_cp)
);

CREATE TABLE proposta(
    id_pr INT AUTO_INCREMENT,
    pedido INT,
    valor DECIMAL(10,2),
    motorista VARCHAR(255),
    veiculo VARCHAR(255),
    PRIMARY KEY (id_pr),
    FOREIGN KEY (pedido) REFERENCES pedido(id_p),
    FOREIGN KEY (motorista) REFERENCES motorista(email),
    FOREIGN KEY (veiculo) REFERENCES veiculo(renavam)
);

CREATE TABLE historico(
    id_h INT AUTO_INCREMENT,
    id_pedido INT,
    data_pedido VARCHAR(255),
    descricao VARCHAR(255),
    origem VARCHAR(255) NOT NULL,
    destino VARCHAR(255) NOT NULL,
    horario TIME NOT NULL,
    data_entrega DATE NOT NULL,
    valor DECIMAL(10,2),
    cliente VARCHAR(255),
    cpf_c VARCHAR(255),
    email_c VARCHAR(255),
    motorista VARCHAR(255),
    cpf_m VARCHAR(255),
    email_m VARCHAR(255),
    veiculo VARCHAR(255),
    PRIMARY KEY(id_h),
    FOREIGN KEY(id_pedido) REFERENCES pedido(id_p)
);

SELECT pedido.id_p, pedido.descricao, pedido.origem, pedido.destino,
pedido.horario, pedido.data_entrega, pedido.valor, pedido.status, 
motorista.nome AS nome_motorista, veiculo.marca, veiculo.modelo, veiculo.placa,
cliente.nome AS nome_cliente, categoria_pedido.nome AS nome_categoria
FROM pedido
INNER JOIN motorista ON pedido.motorista = motorista.email
INNER JOIN veiculo ON pedido.veiculo = veiculo.renavam
INNER JOIN cliente ON pedido.cliente = cliente.email
INNER JOIN categoria_pedido ON pedido.categoria = categoria_pedido.id_cp;