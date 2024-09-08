USE grupo8;
DROP TABLE IF EXISTS Review;
DROP TABLE IF EXISTS Filme;
DROP TABLE IF EXISTS Categoria;
DROP TABLE IF EXISTS Administrador;
DROP TABLE IF EXISTS Usuario;

CREATE TABLE Categoria(
    id_c INT AUTO_INCREMENT,
    Descricao VARCHAR(255),
    PRIMARY KEY (id_c)
);

INSERT INTO Categoria(Descricao) VALUES
    ("Aventura"),
    ("Romance"),
    ("Comédia"),
    ("Thriller"),
    ("Drama"),
    ("Terror"),
    ("Suspense"),
    ("Musical"),
    ("Ação"),
    ("Animação");

CREATE TABLE Filme(
    id_f INT AUTO_INCREMENT,
    id_c INT,
    Titulo VARCHAR(255),
    Lancamento INT(4),
    Disponivel BOOLEAN NOT NULL,
    Imagem VARCHAR(255),
    Trailer VARCHAR(255),
    PRIMARY KEY(id_f),
    FOREIGN KEY (id_c) REFERENCES Categoria(id_c)
);

INSERT INTO Filme(id_c,Titulo,Lancamento,Disponivel,Imagem,Trailer) VALUES
    (4,"Cisne Negro",2010,1,"https://flxt.tmsimg.com/assets/p8236892_v_v10_ar.jpg","https://youtu.be/5jaI1XOB-bs"),
    (5,"As Vantagens de Ser Invisível",2012,0,"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS28w0J7NoXQh7_NEzA_1lQBYX7r8RiiIYHsHtdo3AtVjyRZojg","https://youtu.be/n5rh7O4IDc0"),
    (2,"Hoje Eu Quero Voltar Sozinho",2014,0,"https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcQeRwqQF67Zhh1-Y-UFHMO5ORcdw47W61U659sgbntcRXLWgLOW","https://youtu.be/lpHKXyko358"),
    (8,"La La Land",2016,0,"https://resizing.flixster.com/qrwaHhY7g8sv_HP3fH-zXwyFtME=/ems.cHJkLWVtcy1hc3NldHMvbW92aWVzL2U1ZDIyYTgzLWQxYjctNGY2MC1iNDRiLTYwZTBmOGEwOWM5Mi53ZWJw","https://youtu.be/0pdqf4P9MB8"),
    (7,"Clube da Luta",1999,1,"https://br.web.img3.acsta.net/medias/nmedia/18/90/95/96/20122166.jpg","https://youtu.be/qtRKdVHc-cE"),
    (9,"Kill Bill Vol.1",2003,1,"https://pbs.twimg.com/media/Fi57CVnVUAEROFY?format=jpg&name=4096x4096","https://youtu.be/7kSuas6mRpk");

CREATE TABLE Usuario(
    id_u INT AUTO_INCREMENT,
    Nome VARCHAR(255) NOT NULL,
    Email VARCHAR(255) NOT NULL,
    Senha VARCHAR(255) NOT NULL,
    PRIMARY KEY (id_u)
);

INSERT INTO Usuario(Nome,Email,Senha) VALUES
    ("Administrador","admin@gmail.com","827ccb0eea8a706c4c34a16891f84e7b"),/*Único perfil cadastrado como administrador*/
    ("Gabriel","gabrielalbino28@gmail.com","827ccb0eea8a706c4c34a16891f84e7b"),
    ("Leonardo","leleo@gmail.com","827ccb0eea8a706c4c34a16891f84e7b");

CREATE TABLE Review(
    id_r INT AUTO_INCREMENT,
    id_u INT,
    id_f INT,
    Comentario VARCHAR(255),
    PRIMARY KEY (id_r),
    FOREIGN KEY (id_u) REFERENCES Usuario(id_u),
    FOREIGN KEY (id_f) REFERENCES Filme(id_f)
);

/*INSERT INTO Review (id_u,id_f,Comentario) VALUES
    (2,5,"1ª Regra do Clube da Luta: Você não fala do Clube da Luta"),
    (2,2,"Muito triste, chorei bastante."),
    (3,1,"Aronofsky é um gênio");

SELECT r.Comentario
FROM Review r
WHERE r.id_u = 3
AND r.id_f = 1*/