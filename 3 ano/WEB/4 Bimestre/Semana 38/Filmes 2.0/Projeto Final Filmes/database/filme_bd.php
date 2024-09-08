<?php
if (!isset($_SESSION)){
    session_start();
}
require_once("conecta_bd.php");
function listarFilmesAdmin(){
    $lista_filmes = [];
    $sql = "SELECT f.id_f, f.Imagem, f.Titulo, f.Lancamento, c.Descricao as 'Categoria', f.Trailer, f.Disponivel
    FROM Filme f
    JOIN Categoria c
    WHERE f.id_c=c.id_c
    ORDER BY f.Titulo";
    $conexao = obterConexao();
    $stmt = $conexao->prepare($sql);
    $stmt->execute();
    $resultado = $stmt->get_result();
    while($filme = mysqli_fetch_assoc($resultado)){
        array_push($lista_filmes,$filme);
    }
    $stmt->close();
    $conexao->close();
    return $lista_filmes;
}

function listarFilmesUser(){
    $lista_filmes = [];
    $sql = "SELECT f.id_f, f.Imagem, f.Titulo, f.Lancamento, c.Descricao as 'Categoria', f.Trailer
    FROM Filme f
    JOIN Categoria c
    WHERE f.id_c=c.id_c AND f.Disponivel=1
    ORDER BY f.Titulo";
    $conexao = obterConexao();
    $stmt = $conexao->prepare($sql);
    $stmt->execute();
    $resultado = $stmt->get_result();
    while($filme = mysqli_fetch_assoc($resultado)){
        array_push($lista_filmes,$filme);
    }
    $stmt->close();
    $conexao->close();
    return $lista_filmes;
}

function listarCategorias(){
    $lista_categorias = [];
    $sql = "SELECT * FROM Categoria";
    $conexao = obterConexao();
    $stmt = $conexao->prepare($sql);
    $stmt->execute();
    $resultado = $stmt->get_result();
    while ($categoria = mysqli_fetch_assoc($resultado)) {
        array_push($lista_categorias, $categoria);
    }
    $stmt->close();
    $conexao->close();
    return $lista_categorias;
}


function cadastrarFilme($titulo,$lancamento,$id_c,$imagem,$trailer,$disponivel){
    $sql = "INSERT INTO Filme (Titulo,Lancamento,id_c,Imagem,Trailer,Disponivel) VALUES (?, ?, ?, ?, ?, ?)";
    $conexao = obterConexao();
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("siissi", $titulo, $lancamento, $id_c, $imagem, $trailer, $disponivel);
    $stmt->execute();
    $resultado = $stmt->get_result();
    if(!$resultado) {
        $_SESSION["msg"] = "Cadastro de '{$titulo}' realizado!";
        $_SESSION["tipo_msg"] = "alert-success";
    }else{
        $_SESSION["msg"] = "Cadastro de {$titulo} não foi realizado! Erro: " . mysqli_error($conexao);
        $_SESSION["tipo_msg"] = "alert-danger";
    }
    $stmt->close();
    $conexao->close();
}
?>