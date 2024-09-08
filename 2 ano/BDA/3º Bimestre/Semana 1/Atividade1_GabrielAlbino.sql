drop table if EXISTS departamento;

CREATE TABLE if not EXISTS departamento (
  codigo int not NULL,
  nome varchar(30, 0) not NULL,
  CONSTRAINT pk_codigo PRIMARY KEY (codigo)
  );
  
DROP table if EXISTS curso;

CREATE table if not exists curso (
  codigo int not NULL,
  nome varchar(30, 0) not NULL,
  codigo_departamento int not NULL,
  CONSTRAINT pk_codigo PRIMARY key (codigo),
  CONSTRAINT fk_codigo_departamento FOREIGN key (codigo_departamento)
  	references departamento (codigo)
  	on UPDATE CASCADE
  );
  
drop table if exists aluno;

CREATE table if not exists aluno (
  cpf decimal(11, 0) not NULL,
  nome varchar(30, 0) not NULL,
  data_ingresso date not NULL,
  codigo_curso int not NULL,
  CONSTRAINT pk_cpf PRIMARY key (cpf),
  CONSTRAINT fk_codigo_curso FOREIGN key(codigo_curso)
  	REFERENCES curso (codigo)
  	on update cascade
  );