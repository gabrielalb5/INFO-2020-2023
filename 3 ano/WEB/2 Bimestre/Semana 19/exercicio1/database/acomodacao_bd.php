<?php
    require("conecta_bd.php");
    function ListarAcomodacoes(){
        $lista_acomodacoes = [];
        $sql = "SELECT * FROM Acomodacao";
        $conexao = obterConexao();
        $resultado = mysqli_query($conexao,$sql);
        while($acomodacao = mysqli_fetch_assoc($resultado)){
            array_push($lista_acomodacoes,$acomodacao);
        }
        mysqli_close($conexao);
        return $lista_acomodacoes;
    }
?>