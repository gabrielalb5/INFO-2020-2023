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

    function ListarEstudantes(){
        $conexao = Conexao();

        $lista_estudantes = [];
        $sql = "SELECT e.Nome_e, e.Nascimento, c.Nome_c
        FROM Matricula m
        JOIN Curso c ON m.id_c = c.id_c
        JOIN Estudante e ON m.id_e = e.id_e";
    
        $resultado = mysqli_query($conexao,$sql);
    
        while($estudante = mysqli_fetch_assoc($resultado)){
            array_push($lista_estudantes,$estudante);
        }
        mysqli_close($conexao);
        return $lista_estudantes;
    }
?>