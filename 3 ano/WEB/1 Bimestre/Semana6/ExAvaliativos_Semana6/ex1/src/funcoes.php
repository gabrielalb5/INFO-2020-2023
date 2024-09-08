<?php
    function imprimirPais(){
        if(isset($_SESSION["lista"])){
            $lista = $_SESSION["lista"];
            foreach($lista as $regiao => $value){
                switch($regiao){
                    case 1: $regiao = "África";
                            break;
                    case 2: $regiao = "América";
                            break;
                    case 3: $regiao = "Ásia-Pacífico";
                            break;
                    case 4: $regiao = "Europa";
                            break;
                    case 5: $regiao = "Oriente Médio";
                            break;
                }
                echo '<tr>
                <td>'.$regiao.'</td>
                <td>'.$value.'</td></tr>';
            }
        }else{
            echo '<tr><td>África</td><td>Sem cadastro</td>
            <tr><td>Américas</td><td>Sem cadastro</td>
            <tr><td>Ásia-Pacífico</td><td>Sem cadastro</td>
            <tr><td>Europa</td><td>Sem cadastro</td>
            <tr><td>Oriente Médio</td><td>Sem cadastro</td>';
        }
    }
?>