<?php
require_once("conecta_bd.php");
function buscarAdmin($email,$senha_md5){
    $senha = md5($senha_md5);
    $sql = "SELECT * FROM Administrador
    WHERE Email = ? AND Senha = ?";
    $conexao = obterConexao();
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("ss",$email,$senha);
    $stmt->execute();
    $resultado = $stmt->get_result();
    $stmt->close();
    $conexao->close();
    return mysqli_fetch_assoc($resultado);
}

function cadastrarAdmin($nome,$email,$senha){
    $senha_md5 = md5($senha);
    $sql = "INSERT INTO Administrador(Nome,Email,Senha) VALUES (?, ?, ?);";
    $conexao = obterConexao();
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("sss", $nome, $email, $senha_md5);
    $stmt->execute();
    if($stmt){
        echo '<center>
        <h4 class="mt-4">Cadastro realizado com sucesso!</h4>
        <a href="../public/index.php" class="mt-4 btn btn-outline-dark">Voltar</a>
        </center>';
    }else{
        echo '<center>
        <h4 class="mt-4">Não foi possível realizar seu cadastro :(</h4>
        <a href="../public/index.php" class="mt-4 btn btn-outline-dark">Voltar</a>
        </center>';
    }
    $stmt->close();
    $conexao->close();
}

function sessaoLogin($admin){
    if ($admin == null) {
        header("Location:erro.php");
        } else {
        $_SESSION["logado"] = $admin["Nome"];
        header("Location:principal.php");
        }
        die();
}
?>