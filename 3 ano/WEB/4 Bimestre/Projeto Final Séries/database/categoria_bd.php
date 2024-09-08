<?php
require("conecta_bd.php");
function ListarCategorias(){
    $lista_categorias = [];
    $sql = "SELECT * FROM Categoria";
    $conexao = obterConexao();
    $stmt = $conexao->prepare($sql);
    $stmt->execute();
    $resultado = $stmt->get_result();
    while ($categoria = mysqli_fetch_assoc($resultado)) {
        array_push($lista_categorias, $categoria);
    }
    $stmt->close();
    $conexao->close();
    return $lista_categorias;
}
?>