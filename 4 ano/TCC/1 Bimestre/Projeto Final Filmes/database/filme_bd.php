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
    $sql = "SELECT * FROM Categoria ORDER BY Descricao";
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

function buscarFilme($id_f){
    $sql = "SELECT * FROM Filme WHERE id_f = ?";
    $conexao = obterConexao();
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("i",$id_f);
    $stmt->execute();
    $resultado = $stmt->get_result();
    $filme = mysqli_fetch_assoc($resultado);
    $stmt->close();
    $conexao->close();
    return $filme;
}

function updateFilme($id_f,$titulo,$lancamento,$id_c,$imagem,$trailer,$disponivel){
    $sql = "UPDATE Filme SET Titulo = ?, Lancamento = ?, id_c = ?, Imagem = ?, Trailer = ?, Disponivel = ? WHERE id_f = ?";
    $conexao = obterConexao();
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("siissii", $titulo, $lancamento, $id_c, $imagem, $trailer, $disponivel, $id_f);
    $stmt->execute();
    $resultado = $stmt->get_result();
    if(!$resultado) {
        $_SESSION["msg"] = "O filme '{$titulo}' foi atualizado!";
        $_SESSION["tipo_msg"] = "alert-success";
    }else{
        $_SESSION["msg"] = "O filme {$titulo} não foi atualizado! Erro: " . mysqli_error($conexao);
        $_SESSION["tipo_msg"] = "alert-danger";
    }
    $stmt->close();
    $conexao->close();
}

function deleteFilme($id_f){
    $sql = "DELETE FROM Review WHERE id_f = ?";
    $conexao = obterConexao();
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("i", $id_f);
    $stmt->execute();
    $sql = "DELETE FROM Filme WHERE id_f = ?;";
    $conexao = obterConexao();
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("i", $id_f);
    $stmt->execute();
    $resultado = $stmt->get_result();
    if(!$resultado) {
        $_SESSION["msg"] = "O Filme foi removido!";
        $_SESSION["tipo_msg"] = "alert-danger";
    }else{
        $_SESSION["msg"] = "O filme não foi removido! Erro: " . mysqli_error($conexao);
        $_SESSION["tipo_msg"] = "alert-danger";
    }
    $stmt->close();
    $conexao->close();
}

function review($id_u,$id_f){
    $conexao = obterConexao();
    $sql = "SELECT r.Comentario FROM Review r WHERE r.id_u = ? AND r.id_f = ?";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("ii",$id_u,$id_f);
    $stmt->execute();
    $resultado = $stmt->get_result();
    $review = mysqli_fetch_assoc($resultado);
    $stmt->close();
    $conexao->close();
    return $review;
}

function reviewAdd($id_u,$id_f,$comentario){
    $sql = "INSERT INTO Review (id_u,id_f,Comentario) VALUES (?, ?, ?)";
    $conexao = obterConexao();
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("iis",$id_u,$id_f,$comentario);
    $stmt->execute();
    $resultado = $stmt->get_result();
    if(!$resultado) {
        $_SESSION["msg"] = "Comentário adicionado!";
        $_SESSION["tipo_msg"] = "alert-success";
    }else{
        $_SESSION["msg"] = "Caomentário não adicionado! Erro: " . mysqli_error($conexao);
        $_SESSION["tipo_msg"] = "alert-danger";
    }
    $stmt->close();
    $conexao->close();
}
?>