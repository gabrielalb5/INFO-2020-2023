<?php
if(!isset($_SESSION)){
    session_start();
}
require_once("conecta_bd.php");

function buscarAdmin($email,$senha){
    $senha_md5 = md5($senha);
    $sql = "SELECT * FROM Administrador WHERE Email = ? AND Senha = ?";
    $conexao = obterConexao();
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("ss",$email,$senha_md5);
    $stmt->execute();
    $resultado=$stmt->get_result();
    $stmt->close();
    $conexao->close();
    return mysqli_fetch_assoc($resultado);
}

function cadastrarAdministrador($nome,$email,$senha){
    $admin_cad = ListarAdmin();
    $conexao = obterConexao();
    $senha_md5 = md5($senha);
    foreach ($admin_cad as $ac){
        if($ac["Email"] != $email){
            $sql = "INSERT INTO Administrador (Nome,Email,Senha) VALUES (?,?,?)";
            $stmt = $conexao->prepare($sql);
            $stmt->bind_param("sss",$nome,$email,$senha_md5);
            $stmt->execute();
            if($stmt->affected_rows>0){
                $_SESSION["msg"] = "Cadastro realizado com sucesso!";
                $_SESSION["tipo_msg"] = "alert-success";
            }else{
                $_SESSION["msg"] = "Não foi possível realizar o cadastro.";
                $_SESSION["tipo_msg"] = "alert-danger";
                header("Location:../public/index.php");
                die();
            }
        }else{
            $_SESSION["msg"] = "E-mail já cadastrado.";
            $_SESSION["tipo_msg"] = "alert-danger";
            header("Location:../public/index.php");
            die();
        }
    }
    $stmt->close();
    $conexao->close();
}

function sessaoLogin($admin){
    if($admin==null){
        $_SESSION["msg"] = "E-mail ou senha Inválidos.";
        $_SESSION["tipo_msg"] = "alert-danger";
        header("Location:../public/index.php");
    }else{
        $_SESSION["logado"] = $admin["Nome"];
        header("Location:../src/principal.php");
    }
}

function ListarAdmin(){
    $lista = [];
    $sql = "SELECT * FROM Administrador";
    $conexao = obterConexao();
        $stmt = $conexao->prepare($sql);
        $stmt->execute();
        $resultado=$stmt->get_result();
        while($admin = mysqli_fetch_assoc($resultado)){
            array_push($lista,$admin);
        }
        $stmt->close();
        $conexao->close();
        return $lista;
}


?>
