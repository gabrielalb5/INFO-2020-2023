<?php
    if(!isset($_SESSION)){
        session_start();
    }
    require_once("conecta_bd.php");
    function ListarPaises(){
        $lista = [];
        $sql = "SELECT p.id_p, p.Nome, r.Descricao as Regiao, p.Capital, p.Grupo
        FROM Pais p
        JOIN Regiao r
        WHERE p.id_r = r.id_r";
        $conexao = obterConexao();
        $stmt = $conexao->prepare($sql);
        $stmt->execute();
        $resultado = $stmt->get_result();
        while($pais = mysqli_fetch_assoc($resultado)){
            array_push($lista,$pais);
        }
        $stmt->close();
        $conexao->close();
        return $lista;
    }

    function inserirPais($nome,$id_r,$capital,$grupo){
        $sql = "INSERT INTO Pais (id_r,Nome,Capital,Grupo) VALUES (?,?,?,?)";
        $conexao = obterConexao();
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param("isss",$id_r,$nome,$capital,$grupo);
        $stmt->execute();
        if($stmt->affected_rows>0){
            $_SESSION["msg"] = "País '{$nome}' cadastrado com sucesso.";
            $_SESSION["tipo_msg"] = "alert-success";
        }else{
            $_SESSION["msg"] = "Não foi possível cadastrar.";
            $_SESSION["tipo_msg"] = "alert-danger";
        }
        $stmt->close();
        $conexao->close();
    }

    function removerPais($id_p){
        $sql = "DELETE FROM Pais WHERE id_p = ?";
        $conexao = obterConexao();
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param("i",$id_p);
        $stmt->execute();
        if($stmt->affected_rows>0){
            $_SESSION["msg"] = "País removido.";
            $_SESSION["tipo_msg"] = "alert-danger";
        }else{
            $_SESSION["msg"] = "Não foi possível remover.";
            $_SESSION["tipo_msg"] = "alert-danger";
        }
        $stmt->close();
        $conexao->close();
    }

    function buscarPais($id_p){
        $sql = "SELECT * FROM Pais WHERE id_p = ?";
        $conexao = obterConexao();
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param("i",$id_p);
        $stmt->execute();
        $resultado = $stmt->get_result();
        $stmt->close();
        $conexao->close();
        return mysqli_fetch_assoc($resultado);
    }

    function updatePais($id_p,$id_r,$nome,$capital,$grupo){
        $sql = "UPDATE Pais SET Nome = ?, Capital = ?, Grupo = ?, id_r = ? WHERE id_p = ?";
        $conexao = obterConexao();
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param("sssii",$nome,$capital,$grupo,$id_r,$id_p);
        $stmt->execute();
        if($stmt->affected_rows>0){
            $_SESSION["msg"] = "País '{$nome}' alterado.";
            $_SESSION["tipo_msg"] = "alert-warning";
        }else{
            $_SESSION["msg"] = "Não foi possível alterar.";
            $_SESSION["tipo_msg"] = "alert-danger";
        }
        $stmt->close();
        $conexao->close();
    }
?>