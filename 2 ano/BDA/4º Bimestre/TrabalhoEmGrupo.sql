-- Gabriel Albino (AQ3004775)
-- Camilla Corrêa Ribeiro (AQ3004716)
-- Larissa de Fátima Lopes (AQ3007049)

-- Tabelas
DROP TABLE if exists Médico;
CREATE table if not exists Médico(
  CRM int not NULL,
  Nome Varchar(100),
  CONSTRAINT pk_CRM PRIMARY KEY (CRM)
);

DROP TABLE IF EXISTS Cliente;
CREATE table if not exists Cliente(
  Email VARCHAR(50) NOT NULL,
  Nome_completo VARCHAR(100),
  Data_Nasicmento DATE,
  CONSTRAINT pk_Email PRIMARY key (Email)
);

DROP TABLE IF EXISTS Receita;
create TABLE if not exists Receita(
  CódigoID INT NOT NULL,
  Data date,
  Horário time,
  Médico_Receita INT NOT NULL,
  Cliente_Receita varchar(50) not null,
  CONSTRAINT pk_CódigoID PRIMARY KEY (CódigoID),
  CONSTRAINT fk_Médico_Receita FOREIGN key (Médico_Receita)
  	REFERENCES Médico (CRM)
  	ON UPDATE CASCADE,
  CONSTRAINT fk_Cliente_Receita FOREIGN KEY (Cliente_Receita)
  	REFERENCES Cliente (Email)
  	on update cascade
);

drop table if exists Medicamento;
CREATE TABLE IF NOT EXISTS Medicamento(
  CódigoID INT NOT NULL,
  Nome VARCHAR(50),
  Lote int,
  Data_Validade DATE,
  Classificação varchar(50),
  CONSTRAINT pk_CódigoID PRIMARY KEY (CódigoID)
);

drop table if exists MedidaMédica;
CREATE TABLE IF NOT EXISTS MedidaMédica(
  CódigoID INT NOT NULL,
  Nome VARCHAR(50),
  Descrição VARCHAR(50),
  CONSTRAINT pk_CódigoID PRIMARY KEY (CódigoID)
);

DROP TABLE IF EXISTS Receita_Medicamento;
CREATE TABLE IF NOT EXISTS Receita_Medicamento(
  Código_Receita int not NULL,
  Código_Medicamento int not NULL,
  CONSTRAINT fk_Código_Receita FOREIGN key (Código_Receita)
  	references Receita (CódigoID)
  	ON UPDATE CASCADE,
  CONSTRAINT fk_Código_Medicamento FOREIGN key (Código_Medicamento)
  	REFERENCES Medicamento (CódigoID)
  	ON UPDATE CASCADE
);

DROP TABLE IF EXISTS Receita_MedidaMédica;
CREATE TABLE IF NOT EXISTS Receita_MedidaMédica(
  Código_Receita int not NULL,
  Código_Medida int not NULL,
  CONSTRAINT fk_Código_Receita FOREIGN key (Código_Receita)
  	references Receita (CódigoID)
  	ON UPDATE CASCADE,
  CONSTRAINT fk_Código_Medida FOREIGN key (Código_Medida)
  	REFERENCES MedidaMédica (CódigoID)
  	ON UPDATE CASCADE
);

-- Inserção de Dados

INSERT INTO Médico VALUES
(1345126, 'Roberto Silva'),
(2411235, 'Marina Rodrigues'),
(5598321, 'Joelma Cal Ipso'),
(4865703, 'Fernando Corrêa' ),
(1789232, 'Geraldo Garcia'); 
-- SELECT * FROM Médico;

INSERT INTO Cliente VALUES
('lealves@gmail.com', 'Letícia Alves', '19/06/1999' ),
('lucas26@gmail.com', 'Lucas Gabriel', '26/04/2000'),
('edna.m@gmail.com', 'Edna Montes', '22/02/1965'),
('helenamaria22@gmail', 'Helena Maria', '05/03/1984' ),
('tavinh0pinheiros@gmail.com', 'Otávio Pinheiros', '08/12/2001');
-- SELECT * FROM Cliente;

INSERT INTO Receita VALUES
(5432, '04/11/2021', '08:30', 1345126, 'lealves@gmail.com'),
(4892, '20/10/2021', '11:30', 2411235, 'lucas26@gmail.com'),
(6969, '11/11/2021', '14:00', 1789232, 'helenamaria@gmail.com'),
(1234, '06/10/2021', '16:00', 4865703, 'tavinh0pinheiros@gmail.com'),
(1111, '31/08/2021', '07:30', 5598321, 'edna.m@gmail.com');
-- SELECT * FROM Receita;

INSERT INTO Medicamento VALUES
(68893, 'Dipirona', 253, '10/2022', 'Analgésico'),
(541988, 'Amitripilina', 102, '11/2023', 'Controle do SNC'),
(55199, 'Tylenol Sinus', 105, '06/2023', 'Especializado para sinusite'),
(132655, 'Annita', 351, '12/2022', 'Tratamento de infecções gástricas virais'),
(7868, 'Adoless', 351, '05/2022', 'Anticoncepcional');
-- SELECT * FROM Medicamento;

INSERT INTO MedidaMédica VALUES
(005, 'Repouso I', 'Repouso por 5 dias'),
(053, 'Sem risco I', '50mg a cada 6 horas por 5 dias'),
(075, 'Controlado Anticoncepcional', '75mcg diariamente'),
(096, 'SNC III', '100mg/dia por 1 mês'),
(100, 'Exercícios', 'Atividades físicas regulares');
-- SELECT * FROM MedidaMédica;

insert into Receita_Medicamento VALUES
(5432, '68893'),
(4892, '541988'),
(6969, '7868'),
(1234, '55199'),
(1111, '7868');
-- SELECT * FROM Receita_Medicamento;

INSERT INTO Receita_MedidaMédica VALUES
(5432, '053'),
(4892, '096'),
(6969, '075'),
(1234, '053'),
(1111, '075');
-- SELECT * FROM Receita_MedidaMédica;

-- Tarefa Final
-- a. Fazer um select com concat em uma das tabelas do modelo físico;
SELECT CONCAT(Nome_completo,' - ', Email) AS 'Proprietário do E-mail' 
FROM Cliente;

-- b. Fazer um select com round e alias (AS) em uma das tabelas do modelo físico;
SELECT ROUND(Lote, 2) AS 'Código do medicamento com duas casas decimais' 
FROM Medicamento;

-- c. Fazer um select com SYSDATE em uma das tabelas do modelo físico;
SELECT Nome_completo, DATE(SYSDATE()) AS 'Data'
FROM Cliente
WHERE Email = 'lucas26@gmail.com';

-- d. Fazer um update com where em uma das tabelas do modelo físico;
UPDATE Médico
SET CRM = '2165147'
WHERE Nome = 'Geraldo Garcia';
SELECT * FROM Médico;

-- e. Fazer um delete com where em uma das tabelas do modelo físico;
DELETE FROM MedidaMédica
WHERE CódigoID == 005;
SELECT * FROM MedidaMédica;

-- f. Fazer uma junção com duas tabelas do modelo físico;
SELECT Nome AS 'Médico', Cliente_Receita AS 'E-mail do paciente'
FROM Médico, Receita
WHERE Médico.CRM = Receita.Médico_Receita;

-- g. Fazer uma junção com três tabelas do modelo físico;
SELECT Médico_Receita AS 'CRM do Médico', Cliente_Receita AS 'E-mail do paciente', Código_Medicamento AS 'Código do medicamento', Código_Medida AS 'Código da medida médica'
FROM Receita, Receita_Medicamento, Receita_MedidaMédica
WHERE Receita.CódigoID = Receita_Medicamento.Código_Receita AND Receita.CódigoID = Receita_MedidaMédica.Código_Receita;

-- h. Fazer uma ordenação (order by) no select de uma das tabelas do modelo físico.
SELECT Data, Horário, Cliente_Receita AS 'Paciente'
FROM Receita
ORDER BY CódigoID;