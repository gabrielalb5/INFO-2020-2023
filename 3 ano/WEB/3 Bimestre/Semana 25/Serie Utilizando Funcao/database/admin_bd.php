<?php
require_once("conecta_bd.php");
function buscarAdmin($email,$senha_md5){
    $senha = md5($senha_md5);
    $sql = "SELECT * FROM Administrador
    WHERE Email = '$email' AND Senha ='$senha'";
    $conexao = obterConexao();
    $resultado = mysqli_query($conexao, $sql);
    mysqli_close($conexao);
    return mysqli_fetch_assoc($resultado);
}

function cadastrarAdmin($nome,$email,$senha){
    $senha_md5 = md5($senha);
    $sql = "INSERT INTO Administrador(Nome,Email,Senha) VALUES ('$nome','$email','$senha_md5');";
    $conexao = obterConexao();
    $resultado = mysqli_query($conexao,$sql);
    if($resultado){
        echo '<center>
        <h4 class="mt-5">Cadastro realizado com sucesso!</h4>
        <a href="../public/index.php" class="mt-3 btn btn-outline-dark">Voltar</a>
        </center>';
    }else{
        echo '<center>
        <h4 class="mt-5">Não foi possível realizar seu cadastro :(</h4>
        <a href="../public/index.php" class="mt-3 btn btn-outline-dark">Voltar</a>
        </center>';
    }
    mysqli_close($conexao);
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