<?php   
        $n1 = $_POST["n1"];
        $n2 = $_POST["n2"];
        $n3 = $_POST["n3"];
        $n4 = $_POST["n4"];
        $n5 = $_POST["n5"];
        $menor=999999999999999999999;
        $maior=-99999999999999999999;
        $vetor = array($n1,$n2,$n3,$n4,$n5);
        
        for($i=0;$i<sizeof($vetor);$i++){
            echo "{$vetor[$i]}<br>";
            if($vetor[$i]>$maior){
                $maior = $vetor[$i];
            }
            if($vetor[$i]<$menor){
                $menor = $vetor[$i];
            }
        }
        echo "Maior valor: {$maior}<br>";
        echo "Menor valor: {$menor}";
    ?>