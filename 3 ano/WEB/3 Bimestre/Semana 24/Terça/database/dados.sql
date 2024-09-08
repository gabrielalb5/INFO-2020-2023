USE ifsp;

DROP TABLE IF EXISTS Usuario;

CREATE TABLE Usuario(
    id_u INT AUTO_INCREMENT,
    nome VARCHAR(255),
    email VARCHAR(255),
    senha VARCHAR(50),
    PRIMARY KEY (id_u)
);

INSERT INTO Usuario(nome,email,senha) VALUES
    ("Gabriel Albino","gabrielalbino28@gmail.com","12345"),
    ("Lara","lara.f.m.valentim@gmail.com","Batatatop10"),
    ("Gabriel Mota","gabrielsouzamotaoficial@gmail.com","fuinojao");