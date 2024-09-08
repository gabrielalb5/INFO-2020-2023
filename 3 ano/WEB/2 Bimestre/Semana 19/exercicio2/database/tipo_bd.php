<?php
    require("conecta_bd.php");
    function ListarTipos(){
        $lista_tipos = [];
        $sql = "SELECT * FROM Tipo";
        $conexao = obterConexao();
        $resultado = mysqli_query($conexao,$sql);
        while($tipo = mysqli_fetch_assoc($resultado)){
            array_push($lista_tipos,$tipo);
        }
        mysqli_close($conexao);
        return $lista_tipos;
    }
?>