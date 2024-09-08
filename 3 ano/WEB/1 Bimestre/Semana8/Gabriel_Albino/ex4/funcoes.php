<?php
    function imprimirAlunos(){
        if(isset($_SESSION["alunos"])){
            $alunos = $_SESSION["alunos"];
            for($i=0;$i<sizeof($alunos);$i++){
                $situacao = 0;
                $nome = $alunos[$i][0];
                $prova = $alunos[$i][1];
                $exercicio = $alunos[$i][2];
                $media = ($prova*3 + $exercicio)/4;
                if($media>=6){
                    $situacao = "Aprovado";
                }else{
                    $situacao = "Recuperação";
                }
                echo "<tr><td>{$nome}</td>
                <td>{$prova}</td>
                <td>{$exercicio}</td>
                <td>{$media}</td>
                <td>{$situacao}</td></tr>";
            }
        }else{
            echo '<tr><td colspan="5">Nenhum aluno cadastrado ainda</td></tr>';
        }
    }
?>