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
  data            DATE,
  anotacoes       VARCHAR(60) NOT NULL,
  PRIMARY KEY (id_agendamento),
  FOREIGN KEY (id_atividade) REFERENCES Atividade (id_atividade)
);

CREATE TABLE ListaParticipante (
  id_agendamento  INT,
  id_participante INT,
  PRIMARY KEY (id_agendamento, id_participante),
  FOREIGN KEY (id_agendamento) REFERENCES Agendamento (id_agendamento),
  FOREIGN KEY (id_participante) REFERENCES Participante (id_participante)  
);

INSERT INTO 
  Atividade (descricao)
VALUES
  ("Assistir Série"),
  ("Caminhar"),
  ("Estudar");

INSERT  INTO 
  Participante (nome)
VALUES
  ("Alan"),
  ("Beatriz"),
  ("Carlos"),  
  ("Diana");

INSERT INTO 
  Agendamento (id_atividade, data, anotacoes)
VALUES
  (3, "2022-05-10", "Estudar Web"),
  (1, "2022-05-10", "Assistir a série Sopranos");

INSERT INTO
  ListaParticipante (id_agendamento, id_participante)
VALUES
  (1, 3),    
  (1, 4), 
  (2, 1), 
  (2, 2),
  (2, 3);    

-- Consulta para recuperar as atividades
SELECT *
FROM Atividade

-- Consulta para recuperar os participantes
SELECT *
FROM Participante

-- Consulta para verificar todos os agendamentos
SELECT agd.id_agendamento, p.nome, atv.descricao, agd.anotacoes
FROM Agendamento agd
JOIN Atividade atv ON agd.id_atividade = atv.id_atividade
JOIN ListaParticipante lp ON agd.id_agendamento = lp.id_agendamento
JOIN Participante p ON lp.id_participante = p.id_participante
ORDER BY agd.id_agendamento

-- Consulta para verificar o agendamento de uma determinada atividade
SELECT agd.id_agendamento, p.nome, atv.descricao, agd.anotacoes
FROM Agendamento agd
JOIN Atividade atv ON agd.id_atividade = atv.id_atividade
JOIN ListaParticipante lp ON agd.id_agendamento = lp.id_agendamento
JOIN Participante p ON lp.id_participante = p.id_participante
WHERE agd.id_atividade = 3
ORDER BY agd.id_agendamento