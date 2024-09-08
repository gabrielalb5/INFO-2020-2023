<?php
    function imprimirCasos(){
        if(isset($_SESSION["lista"])){
            $lista = $_SESSION["lista"];
            foreach($lista as $dados){
                switch($dados[0]){
                    case 0: $dados[0] = "Araraquara";
                            break;
                    case 1: $dados[0] = "Matão";
                            break;
                    case 2: $dados[0] = "São Carlos";
                            break;
                }
                echo '<tr>
                <td>'.$dados[0].'</td>
                <td>'.$dados[1].'</td>
                <td>'.$dados[2].'</td></tr>';
            }
        }else{
            echo '<tr><td>Araraquara</td><td>Sem cadastro</td><td>Sem cadastro</td></tr>
            <tr><td>Matão</td><td>Sem cadastro</td><td>Sem cadastro</td></tr>
            <tr><td>São Carlos</td><td>Sem cadastro</td><td>Sem cadastro</td></tr>';
        }
    }
?>