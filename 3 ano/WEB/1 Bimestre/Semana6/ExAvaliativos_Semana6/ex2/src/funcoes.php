<?php
    function cadastrarDestino($destino, $tipo){
        $novo_destino = ["destino" => $destino, "tipo" => $tipo];
        if(isset($_SESSION["destinos"])){
            $lista = $_SESSION["destinos"];
        }else{
            $lista = [];
        }
        array_push($lista, $novo_destino);
        $_SESSION["destinos"] = $lista;
    }

    function imprimirDestino(){
        if(isset($_SESSION["destinos"])){
            $destinos = $_SESSION["destinos"];
            foreach($destinos as $destino){
                echo '<tr>
                <td>'.$destino["destino"].'</td>
                <td>'.$destino["tipo"].'</td></tr>';
            }
        }else{
            echo '<tr><td colspan="4">Nenhum destino cadastrado!</td></tr>';
        }
    }
?>