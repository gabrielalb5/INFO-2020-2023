USE ifsp;

DROP TABLE IF EXISTS ListaParticipante;
DROP TABLE IF EXISTS Agendamento;
DROP TABLE IF EXISTS Atividade;
DROP TABLE IF EXISTS Participante;

CREATE TABLE Atividade (
  id_atividade INT AUTO_INCREMENT,
  descricao    VARCHAR(40) NOT NULL,
  PRIMARY KEY (id_atividade)
);

CREATE TABLE Participante (
  id_participante INT AUTO_INCREMENT,
  nome            VARCHAR(40) NOT NULL,
  PRIMARY KEY (id_participante)
);

CREATE TABLE Agendamento (
  id_agendamento  INT AUTO_INCREMENT,
  id_atividade    INT,
  id_participante INT,
  data            DATE,
  anotacoes       VARCHAR(60) NOT NULL,
  PRIMARY KEY (id_agendamento),
  FOREIGN KEY (id_atividade) REFERENCES Atividade (id_atividade),
  FOREIGN KEY (id_participante) REFERENCES Participante (id_participante)
);

INSERT INTO 
  Atividade (descricao)
VALUES
  ("Assistir Série"),
  ("Caminhar"),
  ("Estudar");

INSERT INTO 
  Participante (nome)
VALUES
  ("Alan"),
  ("Beatriz"),
  ("Carlos"),  
  ("Diana");

INSERT INTO 
  Agendamento (id_atividade, id_participante, data, anotacoes)
VALUES
  (3, 4, "2022-05-10", "Estudar Web"),
  (1, 2, "2022-05-10", "Assistir a série Sopranos");

-- Consulta para recuperar as atividades
SELECT *
FROM Atividade

-- Consulta para recuperar os participantes
SELECT *
FROM Participante

-- Utilizando JOIN
-- Consulta para verificar todos os agendamentos
SELECT agd.id_agendamento, p.nome, atv.descricao, agd.anotacoes
FROM Agendamento agd
JOIN Atividade atv ON agd.id_atividade = atv.id_atividade
JOIN Participante p ON agd.id_participante = p.id_participante
ORDER BY agd.id_agendamento

-- Consulta para verificar o agendamento de uma determinada atividade
SELECT agd.id_agendamento, p.nome, atv.descricao, agd.anotacoes
FROM Agendamento agd
JOIN Atividade atv ON agd.id_atividade = atv.id_atividade
JOIN Participante p ON agd.id_participante = p.id_participante
WHERE agd.id_atividade = 3
ORDER BY agd.id_agendamento

-- Utilizando WHERE
-- Consulta para verificar todos os agendamentos 
SELECT agd.id_agendamento, p.nome, atv.descricao, agd.anotacoes
FROM Agendamento agd, Atividade atv, Participante p
WHERE agd.id_atividade = atv.id_atividade
  AND agd.id_participante = p.id_participante
ORDER BY agd.id_agendamento

-- Consulta para verificar o agendamento de uma determinada atividade
SELECT agd.id_agendamento, p.nome, atv.descricao, agd.anotacoes
FROM Agendamento agd, Atividade atv, Participante p
WHERE agd.id_atividade = atv.id_atividade
  AND agd.id_participante = p.id_participante
  AND agd.id_atividade = 3
ORDER BY agd.id_agendamento