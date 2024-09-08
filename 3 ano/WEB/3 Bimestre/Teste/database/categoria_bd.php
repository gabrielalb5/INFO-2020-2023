<?php
    require_once("conecta_bd.php");
    function ListarCategorias(){
        $lista = [];
        $sql = "SELECT * FROM Categoria";
        $conexao = obterConexao();
        $stmt = $conexao->prepare($sql);
        $stmt->execute();
        $resultado=$stmt->get_result();
        while($categoria = mysqli_fetch_assoc($resultado)){
            array_push($lista,$categoria);
        }
        $stmt->close();
        $conexao->close();
        return $lista;
    }
?>