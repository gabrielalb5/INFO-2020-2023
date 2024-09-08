<?php
    header("Content-Type: application/json");
    require("../database/funcoes.php");
    /*$resultado = listar_notificacoes();
    $lista_notificacoes = $resultado['notificacoes'];
    $cont_nao_lidas = $resultado['nao_lidas'];*/
    listar_notificacoes();
?>