<?php
    require("conecta_bd.php");
    function ListarViagens(){
        $lista_viagens = [];
        $sql = "SELECT v.id_v, v.Origem, v.Destino, v.Periodo, v.Valor, v.Quantidade, a.Tipo, v.Cafe, v.Traslado
        FROM Viagem v 
        JOIN Acomodacao a
        ON v.id_a = a.id_a";
        $conexao = obterConexao();
        $resultado = mysqli_query($conexao,$sql);
        while($viagem = mysqli_fetch_assoc($resultado)){
            array_push($lista_viagens,$viagem);
        }
        mysqli_close($conexao);
        return $lista_viagens;
    }

    function RemoverViagem($id_v){
        $sql = "DELETE FROM Viagem WHERE id_v = $id_v";
        $conexao = obterConexao();
        mysqli_query($conexao,$sql);
        mysqli_close($conexao);
    }

    function CadastrarViagem($origem,$destino,$periodo,$valor,$quantidade,$id_a,$cafe,$traslado){
        $sql = "INSERT INTO Viagem (Origem, Destino, Periodo, Valor, Quantidade, id_a, Cafe, Traslado)
        VALUES ('$origem','$destino','$periodo',$valor,$quantidade,$id_a,$cafe,$traslado)";
        $conexao = obterConexao();
        mysqli_query($conexao,$sql);
        mysqli_close($conexao);
    }
?>