<?php
    require("conecta_bd.php");
    function ListarFuncoes(){
        $lista_funcoes = [];
        $sql = "SELECT * FROM Funcao";
        $conexao = obterConexao();
        $resultado = mysqli_query($conexao,$sql);
        while($funcao = mysqli_fetch_assoc($resultado)){
            array_push($lista_funcoes,$funcao);
        }
        mysqli_close($conexao);
        return $lista_funcoes;
    }
?>