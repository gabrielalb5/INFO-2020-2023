<?php
if(!isset($_SESSION)){
    session_start();
}
    require_once("conecta_bd.php");
    function buscarUsuario($email,$senha){
        $senha_md5 = md5($senha);
        $sql = "SELECT * FROM Usuario WHERE Email = ? AND Senha = ?";
        $conexao = obterConexao();
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param("ss",$email,$senha_md5);
        $stmt->execute();
        $resultado = $stmt->get_result();
        $stmt->close();
        $conexao->close();
        return mysqli_fetch_assoc($resultado);
    }

    function sessaoLogin($usuario){
        if($usuario == null){
            $_SESSION["msg"] = "Email ou senha inválidos";
            $_SESSION["tipo_msg"] = "alert-danger";
            header("Location:../public/index.php");
        }else{
            $_SESSION["logado"] = $usuario["Email"];
            header("Location:../src/principal.php");
        }
    }
?>