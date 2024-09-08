USE ifsp;

DROP TABLE IF EXISTS atividades;
DROP TABLE IF EXISTS participantes;
DROP TABLE IF EXISTS agendamentos;

CREATE TABLE atividades(
    id_ativ INT AUTO_INCREMENT,
    descricao VARCHAR(30),
    PRIMARY KEY (id_ativ)
);

INSERT INTO atividades (descricao) VALUES
("Vôlei"), ("Xadrez"), ("Ler"), ("Assistir Filme"), ("Dançar"), ("Surfar na net");

CREATE TABLE participantes(
    id_participante INT AUTO_INCREMENT,
    nome VARCHAR(30),
    PRIMARY KEY (id_participante)
);

INSERT INTO participantes (nome) VALUES
("Lara"), ("Lívia"), ("Gabriel"), ("Alex"), ("Larissa"), ("João Pedro"), ("Camilla"), ("Ana Julia");

CREATE TABLE agendamentos(
    id_agendamento INT AUTO_INCREMENT,
    dia DATE NOT NULL,
    id_ativ INT NOT NULL,
    id_participante INT NOT NULL,
    anotacoes VARCHAR(200),
    PRIMARY KEY id_agendamento,
    FOREIGN KEY (id_ativ) REFERENCES atividades(id_ativ),
    FOREIGN KEY (id_participante) REFERENCES participantes(id_participante)
);

INSERT INTO agendamentos (dia, id_ativ, id_participante, anotacoes) VALUES
    ("2022-05-04",1,4,"Aula de Vôlei"),
    ("2022-05-04",1,1,"Aula de Vôlei"), 
    ("2022-05-04",1,2,"Aula de Vôlei"), 
    ("2022-05-04",1,5,"Aula de Vôlei"), 
    ("2022-05-05",4,3,"Doutor Estranho"), 
    ("2022-05-05",4,6,"Doutor Estranho");

UPDATE agendamentos SET dia="2022-05-14" WHERE dia="2022-05-05";
DELETE FROM agendamentos WHERE id_participante=4;

SELECT p.nome as Nome, atv.descricao as Atividade, agd.dia as Dia, agd.anotacoes as Anotações
FROM agendamentos agd 
JOIN atividades atv ON agd.id_ativ = atv.id_ativ
JOIN participantes p ON agd.id_participante = p.id_participante