<?php
require("conexao_bd.php");

function ListarSeries($conexao){
    $lista_series = [];
    $sql = "SELECT * FROM Serie";

    $resultado = mysqli_query($conexao,$sql);

    while($serie = mysqli_fetch_assoc($resultado)){
        array_push($lista_series,$serie);
    }
    mysqli_close($conexao);
    return $lista_series;
}
?>