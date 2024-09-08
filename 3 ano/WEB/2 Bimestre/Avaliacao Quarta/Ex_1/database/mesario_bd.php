<?php
    require("conecta_bd.php");
    function ListarMesarios(){
        $listaMesarios = [];
        $sql = "SELECT * FROM Mesario";
        $conexao = obterConexao();
        $resultado = mysqli_query($conexao,$sql);
        while($mesario = mysqli_fetch_assoc($resultado)){
            array_push($listaMesarios,$mesario);
        }
        mysqli_close($conexao);
        return $listaMesarios;
    }

    function CadastrarMesario($nome,$fone,$nro_inscricao,$zona,$secao){
        $sql = "INSERT INTO Mesario (nome,fone,nro_inscricao,zona,secao) VALUES ('$nome','$fone',$nro_inscricao,$zona,$secao)";
        $conexao = obterConexao();
        mysqli_query($conexao,$sql);
        mysqli_close($conexao);
    }
?>