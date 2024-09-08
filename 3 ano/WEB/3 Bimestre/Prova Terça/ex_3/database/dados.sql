USE ifsp;

DROP TABLE IF EXISTS Usuario;
CREATE TABLE Usuario(
    id_u INT AUTO_INCREMENT,
    Nome VARCHAR(255) NOT NULL,
    Email VARCHAR(255) NOT NULL,
    Senha VARCHAR(255) NOT NULL,
    PRIMARY KEY (id_u)
);

INSERT INTO Usuario (Nome,Email,Senha) 
VALUES ("Usuário 1","aluno@ifsp.edu.br",md5("1234"));