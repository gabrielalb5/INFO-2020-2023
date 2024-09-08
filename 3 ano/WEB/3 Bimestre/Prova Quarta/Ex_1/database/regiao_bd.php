<?php
    require_once("conecta_bd.php");
    function ListarRegioes(){
        $lista = [];
        $sql = "SELECT * FROM Regiao";
        $conexao = obterConexao();
        $stmt = $conexao->prepare($sql);
        $stmt->execute();
        $resultado = $stmt->get_result();
        while($regiao = mysqli_fetch_assoc($resultado)){
            array_push($lista,$regiao);
        }
        $stmt->close();
        $conexao->close();
        return $lista;
    }

?>