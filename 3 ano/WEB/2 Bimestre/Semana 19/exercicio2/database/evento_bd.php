<?php
    require("conecta_bd.php");
    function ListarEventos(){
        $lista_eventos = [];
        $sql = "SELECT e.id_e, t.Nome, e.Descricao, e.Organizador, e.Participante
        FROM Evento e
        JOIN Tipo t
        ON e.id_t=t.id_t";
        $conexao = obterConexao();
        $resultado = mysqli_query($conexao,$sql);
        while($evento = mysqli_fetch_assoc($resultado)){
            array_push($lista_eventos,$evento);
        }
        mysqli_close($conexao);
        return $lista_eventos;
    }

    function RemoverEvento($id_e){
        $sql = "DELETE FROM Evento WHERE id_e = $id_e";
        $conexao = obterConexao();
        mysqli_query($conexao,$sql);
        mysqli_close($conexao);
    }

    function CadastrarEvento($id_t,$descricao,$organizador,$participante){
        $sql = "INSERT INTO Evento (id_t,Descricao,Organizador,Participante)
        VALUES ($id_t,'$descricao','$organizador','$participante')";
        $conexao = obterConexao();
        mysqli_query($conexao,$sql);
        mysqli_close($conexao);
    }
?>