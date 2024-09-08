<?php
if (!isset($_SESSION)){
    session_start();
}
require_once("conecta_bd.php");
function cadastrarUser($nome,$email,$senha){
    $sql = "SELECT Email FROM Usuario WHERE Email = ?"; 
    $conexao = obterConexao();
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $resultado = $stmt->get_result();
    $usuario = mysqli_fetch_assoc($resultado);
    if ($usuario == null) {
        $senha_md5 = md5($senha);
        $sql = "INSERT INTO Usuario(Nome,Email,Senha) VALUES (?, ?, ?);";
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param("sss", $nome, $email, $senha_md5);
        $stmt->execute();
        $_SESSION["msg"] = 'Cadastro realizado com sucesso!';
        $_SESSION["tipo_msg"] = "alert-success";
    }else {
        $_SESSION["msg"] = 'O e-mail "'.$email.'" já está cadastrado!';
        $_SESSION["tipo_msg"] = "alert-danger";
        header("Location:form_user_cad.php");
        die();
    }
    $stmt->close();
    $conexao->close();
    header("Location:../public/index.php");
}

function buscarUsuario($email, $senha) {
    $sql = "SELECT Email FROM Usuario WHERE Email = ?"; 
    $conexao = obterConexao();
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $resultado = $stmt->get_result();
    $usuario = mysqli_fetch_assoc($resultado);
    if ($usuario == null) {
      $msg = "Usuário incorreto!"; 
    } else {
      $senha_md5 = md5($senha);
      $sql = "SELECT * FROM Usuario
              WHERE Email = ? AND Senha = ?";  
      $stmt = $conexao->prepare($sql);
      $stmt->bind_param("ss", $email, $senha_md5);
      $stmt->execute();
      $resultado = $stmt->get_result();
      $usuario = mysqli_fetch_assoc($resultado);
      if ($usuario == null) {
        $msg = "Senha incorreta!";  
      } else {
        $msg = null;
      }
    }
    $stmt->close();
    $conexao->close();
    return [$usuario, $msg];
  }
?>