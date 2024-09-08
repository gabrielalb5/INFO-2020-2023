<?php
    require("conecta_bd.php");
    function ListarParticipantes(){
        $listaParticipantes = [];
        $sql = "SELECT p.id_participante, p.nome, p.empresa, f.descricao as 'funcao', p.diaria
        FROM Participante p
        JOIN Funcao f
        ON p.funcao = f.id_funcao
        ORDER BY id_participante";
        $conexao = obterConexao();
        $resultado = mysqli_query($conexao,$sql);
        while($participante = mysqli_fetch_assoc($resultado)){
            array_push($listaParticipantes,$participante);
        }
        mysqli_close($conexao);
        return $listaParticipantes;
    }

    function CadastrarParticipante($nome,$empresa,$funcao,$diaria){
        $sql = "INSERT INTO Participante (nome,empresa,funcao,diaria) VALUES ('$nome','$empresa',$funcao,$diaria)";
        $conexao = obterConexao();
        mysqli_query($conexao,$sql);
        mysqli_close($conexao);
    }

    function RemoverParticipante($id_participante){
        $sql = "DELETE FROM Participante WHERE id_participante = $id_participante";
        $conexao = obterConexao();
        mysqli_query($conexao,$sql);
        mysqli_close($conexao);
    }
?>