USE ifsp;

DROP TABLE IF EXISTS aniversario;
CREATE TABLE aniversario(
    id_amigo INT AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL,
    dia DATE NOT NULL,
    PRIMARY KEY (id_amigo)
);

INSERT INTO
    aniversario (nome, dia)
VALUES
    ("Lara","2004-09-01"),
    ("Camilla","2004-08-31"),
    ("Alex","2004-08-10"),
    ("Lívia","2004-11-24"),
    ("Larissa","2005-07-18"),
    ("Gustavo","2004-11-11");

UPDATE aniversario SET dia="2005-06-18" WHERE nome="Larissa";
DELETE FROM aniversario WHERE nome="Alex";