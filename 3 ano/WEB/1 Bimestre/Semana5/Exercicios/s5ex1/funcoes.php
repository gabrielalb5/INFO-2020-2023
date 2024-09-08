<?php
    function inserirAtividade($dia,$atv){
        $nova_atv = ["dia" => $dia, "atividade" => $atv];
        if(isset($_SESSION["atividades"])){
            $lista = $_SESSION["atividades"];
        }else{
            $lista = [];
        }
        array_push($lista, $nova_atv);
        $_SESSION["atividades"] = $lista;
    }

    function imprimirAtividade(){
        if(isset($_SESSION["atividades"])){
            $atividades = $_SESSION["atividades"];
            foreach($atividades as $atividade){
                echo '<tr>
                <td>'.$atividade["dia"].'</td>
                <td>'.$atividade["atividade"].'</td></tr>';
            }
        }else{
            echo '<tr><td colspan="4">Nenhuma atividade cadastrada!</td></tr>';
        }
    }
?>