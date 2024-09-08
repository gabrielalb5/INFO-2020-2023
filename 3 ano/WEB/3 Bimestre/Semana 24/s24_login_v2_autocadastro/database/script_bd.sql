USE shoppingvirtual;

CREATE TABLE Usuario (
  id_usuario INT AUTO_INCREMENT,
  email  VARCHAR(255) NOT NULL,
  senha  VARCHAR(255) NOT NULL,
  PRIMARY KEY (id_usuario)
);

INSERT INTO 
  Usuario (email, senha)
VALUES
  ("aluno@ifsp.edu.br", "CA0CD09A12ABADE3BF0777574D9F987F");

/* a senha "aluno" foi gerada utilizando md5 por meio do site:
https://dotmaui.com/md5-sha1-sha256-converter/
*/