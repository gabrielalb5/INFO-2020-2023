<?php
    function imprimirCasos(){
        if(isset($_SESSION["dias"])){
            $dias = $_SESSION["dias"];
                foreach($dias as $maior_dia => $caso){
                switch ($maior_dia){
                    case 0: $maior_dia = "Segunda";
                            break;
                    case 1: $maior_dia = "Terça";
                            break;
                    case 2: $maior_dia = "Quarta";
                            break;
                    case 3: $maior_dia = "Quinta";
                            break;
                    case 4: $maior_dia = "Segunda";
                            break;
                    }
                echo '<tr>
                <td>'.$maior_dia.'</td>
                <td>'.$caso.'</td></tr>';
                }
        }else{
            echo '<tr><td colspan="2">Nenhum dado cadastrado até o momento</td></tr>';
        }
    }

    function media(){
        if(isset($_SESSION["dias"])){
        $dias = $_SESSION["dias"];
        $soma = 0;
        for($i=0;$i<=4;$i++){
            $soma = $soma + $dias[$i];
        }
        $media = $soma/5;
        echo "A média de casos é: {$media}";
        }
    }

    function maior(){
        if(isset($_SESSION["dias"])){
            $dias = $_SESSION["dias"];
            $maior = 0;
            for($i=0;$i<5;$i++){
                if($i==0){
                    $maior = $dias[$i];
                }
                if($dias[$i]>=$maior){
                    $maior = $dias[$i];
                    $maior_dia = $i;
                }
            }
            echo '</br>Maior: '.$dias[$maior_dia].'';
            switch ($maior_dia){
                case 0: $maior_dia = "Segunda";
                        break;
                case 1: $maior_dia = "Terça";
                        break;
                case 2: $maior_dia = "Quarta";
                        break;
                case 3: $maior_dia = "Quinta";
                        break;
                case 4: $maior_dia = "Segunda";
                        break;
                }
            echo ' | Dia da semana: '.$maior_dia.'</br>';
        }
    }
?>