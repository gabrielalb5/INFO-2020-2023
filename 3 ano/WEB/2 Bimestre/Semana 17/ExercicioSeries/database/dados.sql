USE ifsp;

DROP TABLE IF EXISTS Serie;
CREATE TABLE Serie(
    id_s INT AUTO_INCREMENT,
    Nome VARCHAR(255) NOT NULL,
    Lancamento INT(4) NOT NULL,
    Temporadas INT NOT NULL,
    PRIMARY KEY (id_s)
);

INSERT INTO Serie(Nome,Lancamento,Temporadas) VALUES
    ("Stranger Things",2016,4),
    ("Euphoria",2019,2),
    ("Fleabag",2016,2),
    ("A Maldição da Residência Hill",2018,1),
    ("The Good Place",2016,4);