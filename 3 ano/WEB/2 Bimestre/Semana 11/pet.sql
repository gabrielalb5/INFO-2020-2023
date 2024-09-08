USE ifsp;

CREATE TABLE pet(
    id_animal INT AUTO_INCREMENT,
    nome VARCHAR(30),
    tipo VARCHAR(50) NOT NULL,
    raca VARCHAR(20),
    patas INT NOT NULL,
    PRIMARY KEY (id_animal)
);

INSERT INTO 
    pet (nome, tipo, raca, patas)
VALUES 
    ("Luke","Gato","Siâmes",4),
    ("Peixe","Peixe","Betta",0),
    ("Papagaio 1","Pássaro","Papagaio",2),
    ("Papagaio 2","Pássaro","Papagaio",2);