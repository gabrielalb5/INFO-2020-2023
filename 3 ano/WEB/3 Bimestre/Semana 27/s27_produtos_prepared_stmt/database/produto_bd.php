<?php
if (!isset($_SESSION)) {
  session_start();
}
require_once("conecta_bd.php");

function buscarProduto($id_produto) {
  $sql = "SELECT * FROM Produto WHERE id_produto = ?";
  $conexao = obterConexao();
  $stmt = $conexao->prepare($sql);
  $stmt->bind_param("i", $id_produto);
  $stmt->execute();
  $resultado = $stmt->get_result();
  $produto = mysqli_fetch_assoc($resultado);
  $stmt->close();
  $conexao->close();
  return $produto;  
  /*
  $sql = "SELECT * FROM Produto WHERE id_produto = $id_produto";
  $conexao = obterConexao();
  $resultado = mysqli_query($conexao, $sql);
  $produto = mysqli_fetch_assoc($resultado);
  mysqli_close($conexao);
  return $produto;
  */
}

function listarProdutos() {
  $lista_produtos = [];
  $sql = "SELECT p.*, c.descricao as descricao_categoria
          FROM Produto p
          INNER JOIN Categoria c
          ON p.id_categoria = c.id_categoria";  
  $conexao = obterConexao();
  $stmt = $conexao->prepare($sql);
  $stmt->execute();
  $resultado = $stmt->get_result();
  while ($produto = mysqli_fetch_assoc($resultado)) {
    array_push($lista_produtos, $produto);
  }
  $stmt->close();
  $conexao->close();
  return $lista_produtos;  
  /*
  $sql = "SELECT p.*, c.descricao as descricao_categoria
          FROM Produto p
          INNER JOIN Categoria c
          ON p.id_categoria = c.id_categoria";
  $conexao = obterConexao();
  $resultado = mysqli_query($conexao, $sql);
  while ($produto = mysqli_fetch_assoc($resultado)) {
    array_push($lista_produtos, $produto);
  }
  mysqli_close($conexao);
  return $lista_produtos;
  */
}

function inserirProduto($descricao, $valor, $data_cadastro, $categoria, $lancamento) {
  $sql = "INSERT INTO Produto (descricao, valor, data_cadastro, id_categoria, lancamento) 
  VALUES (?, ?, ?, ?, ?)";
  $conexao = obterConexao();
  $stmt = $conexao->prepare($sql);
  $stmt->bind_param("sdsii", $descricao, $valor, $data_cadastro, $categoria, $lancamento);
  $stmt->execute();
  if ($stmt->affected_rows > 0) {
    $_SESSION["msg"] = "O produto {$descricao} foi adicionado!";
    $_SESSION["tipo_msg"] = "alert-success";
  } else {
    $_SESSION["msg"] = "O produto {$descricao} não foi adicionado!";
    $_SESSION["tipo_msg"] = "alert-danger";
  }
  $stmt->close();
  $conexao->close(); 
  /*
  $conexao = obterConexao();
  $sql = "INSERT INTO Produto (descricao, valor, data_cadastro, id_categoria, lancamento) 
                       VALUES ('$descricao', $valor, '$data_cadastro', $categoria, $lancamento)";
  $resultado = mysqli_query($conexao, $sql);
  if ($resultado) {
    $_SESSION["msg"] = "O produto {$descricao} foi adicionado!";
    $_SESSION["tipo_msg"] = "alert-success";
  } else {
    $_SESSION["msg"] = "O produto {$descricao} não foi adicionado! Erro: " . mysqli_error($conexao);
    $_SESSION["tipo_msg"] = "alert-danger";
  }
  mysqli_close($conexao);
  */
}

function alterarProduto($descricao, $valor, $data_cadastro, $categoria, $lancamento, $id_produto) {
  $sql = "UPDATE Produto 
          SET descricao = ?, valor = ?, data_cadastro = ?, id_categoria = ?, lancamento = ?
          WHERE id_produto = ?";            
  $conexao = obterConexao();
  $stmt = $conexao->prepare($sql);
  $stmt->bind_param("sdsiii", $descricao, $valor, $data_cadastro, $categoria, $lancamento, $id_produto);
  $stmt->execute();
  if ($stmt->affected_rows > 0) {
    $_SESSION["msg"] = "O produto {$descricao} foi alterado!";
    $_SESSION["tipo_msg"] = "alert-warning";
  } else {
    $_SESSION["msg"] = "O produto {$descricao} não foi alterado!";
    $_SESSION["tipo_msg"] = "alert-danger";
  }    
  $stmt->close();
  $conexao->close(); 
  /*
  $conexao = obterConexao();
  $sql = "UPDATE Produto 
          SET descricao = '$descricao', valor = $valor, data_cadastro='$data_cadastro', id_categoria = $categoria, lancamento = $lancamento
          WHERE id_produto = $id_produto";
  $resultado = mysqli_query($conexao, $sql);
  if ($resultado) {
    $_SESSION["msg"] = "O produto {$descricao} foi alterado!";
    $_SESSION["tipo_msg"] = "alert-warning";
  } else {
    $_SESSION["msg"] = "O produto {$descricao} não foi alterado! Erro: " . mysqli_error($conexao);
    $_SESSION["tipo_msg"] = "alert-danger";
  }  
  mysqli_close($conexao);
  */
}

function removerProduto($id_produto) {
  $sql = "DELETE FROM Produto WHERE id_produto = ?";
  $conexao = obterConexao();
  $stmt = $conexao->prepare($sql);
  $stmt->bind_param("i", $id_produto);
  $stmt->execute();
  if ($stmt->affected_rows > 0) {
    $_SESSION["msg"] = "O produto foi removido!";
    $_SESSION["tipo_msg"] = "alert-danger";
  } else {
    $_SESSION["msg"] = "O produto não foi removido!";
    $_SESSION["tipo_msg"] = "alert-danger";
  }    
  $stmt->close();
  $conexao->close();
  /*
  $sql = "DELETE FROM Produto WHERE id_produto = $id_produto";
  $conexao = obterConexao();
  $resultado = mysqli_query($conexao, $sql);
  if ($resultado) {
    $_SESSION["msg"] = "O produto foi removido!";
    $_SESSION["tipo_msg"] = "alert-danger";
  } else {
    $_SESSION["msg"] = "O produto não foi removido! Erro: " . mysqli_error($conexao);
    $_SESSION["tipo_msg"] = "alert-danger";
  }
  mysqli_close($conexao);
  */
}
?>