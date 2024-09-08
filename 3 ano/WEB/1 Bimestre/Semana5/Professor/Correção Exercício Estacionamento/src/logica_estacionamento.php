<?php  
    function calcularDesconto($valor){
        if ($valor > 20 && $valor <= 50) {
            $valor_desconto = $valor * 0.9;
        } else {
            if ($valor <= 20) {
                $valor_desconto = $valor * 0.95;
            } else {
                $valor_desconto = $valor * 0.8;
            }
        }
        return $valor_desconto;
    }

    function calcularValorEstacionamento($entrada, $saida){
        define("VALOR_HORA", 12);

        $permanencia = $saida - $entrada;
        $valor = (1 * VALOR_HORA) + (($permanencia - 1) * (VALOR_HORA / 3));
        
        $valor_final = calcularDesconto($valor);

        return $valor_final;
    }

?>