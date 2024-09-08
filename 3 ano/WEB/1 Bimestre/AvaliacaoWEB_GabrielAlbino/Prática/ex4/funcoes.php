<?php
    function imprimir(){
        if(isset($_SESSION["lista"])){
            $lista = $_SESSION["lista"];
            foreach($lista as $caso){
                switch($caso[0]){
                    case 1: $caso[0] = "Araraquara";
                            break;
                    case 2: $caso[0] = "Matão";
                            break;
                    case 3: $caso[0] = "São Carlos";
                            break;
                }
                echo '<tr>
                <td>'.$caso[0].'</td>
                <td>'.$caso[1].'</td>
                <td>'.$caso[2].'</td></tr>';
            }
        }else{
            echo  "<tr><td>Araraquara</td><td>Sem cadastro</td><td>Sem cadastro</td></tr>
            <tr><td>Matão</td><td>Sem cadastro</td><td>Sem cadastro</td></tr>
            <tr><td>São Carlos</td><td>Sem cadastro</td><td>Sem cadastro</td></tr>";
        }
    }

    function soma(){
        $rec = $_SESSION["recuperados"];
        if(!isset($_SESSION["soma"])){
            $_SESSION["soma"] = $rec;
        }else{
            $soma = $_SESSION["soma"];
            $_SESSION["soma"] = $soma+$rec;
        }
        $total = $_SESSION["soma"];
        echo "<br>O número de recuperados ao total é: {$total}";
    }
?>