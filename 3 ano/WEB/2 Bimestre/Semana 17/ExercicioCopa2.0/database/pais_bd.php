<?php
    function Conexao(){
        $servidor = "localhost";
        $usuario = "web";
        $senha = "web";
        $banco = "ifsp";

        $conexao = mysqli_connect($servidor,$usuario,$senha,$banco);

        if(!$conexao){
            echo "Não foi possível conectar. Erro:". mysqli_connect_error();
            die();
        }
        return $conexao;
    }

    function ListarPaises(){
        $conexao = Conexao();

        $lista_paises = [];
        $sql = "SELECT p.id_p, c.NomeC, p.NomeP, p.Idioma, p.Moeda, p.IDH
        FROM Pais p
        JOIN Continente c WHERE c.id_c = p.id_c";
    
        $resultado = mysqli_query($conexao,$sql);
    
        while($pais = mysqli_fetch_assoc($resultado)){
            array_push($lista_paises,$pais);
        }
        mysqli_close($conexao);
        return $lista_paises;
    }
?>