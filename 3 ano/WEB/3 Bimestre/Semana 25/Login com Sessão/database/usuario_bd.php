<?php
require_once("conecta_bd.php");
function buscarUsuario($email,$senha_md5){
    $senha = md5($senha_md5);
    $sql = "SELECT * FROM Usuario
    WHERE email = '$email' AND senha ='$senha'";
    $conexao = obterConexao();
    $resultado = mysqli_query($conexao, $sql);
    mysqli_close($conexao);
    return mysqli_fetch_assoc($resultado);
}

function cadastrarUsuario($nome,$email,$senha){
    $senha_md5 = md5($senha);
    $sql = "INSERT INTO Usuario(nome,email,senha) VALUES ('$nome','$email','$senha_md5');";
    $conexao = obterConexao();
    $resultado = mysqli_query($conexao,$sql);
    if($resultado){
        echo '<center>
        <h4 class="mt-5 text-white">Cadastro realizado com sucesso!</h4>
        <a href="../public/index.php" class="mt-3 btn btn-outline-light">Voltar</a>
        </center>';
    }else{
        echo '<center>
        <h4 class="mt-5 text-white">Não foi possível realizar seu cadastro :(</h4>
        <a href="../public/index.php" class="mt-3 btn btn-outline-light">Voltar</a>
        </center>';
    }
    mysqli_close($conexao);
}
?>