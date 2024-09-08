<?php
if (!isset($_SESSION)){
    session_start();
}
require_once("conecta_bd.php");
function listarespecies(){
    $lista_especies = [];
    $sql = "SELECT * FROM Especie ORDER BY Tipo";
  
    $conexao = obterConexao();
    $resultado = mysqli_query($conexao, $sql);

    while ($especie = mysqli_fetch_assoc($resultado)) {
        array_push($lista_especies, $especie);
    }
    mysqli_close($conexao);
    return $lista_especies;
}

function cadastrarespecie($tipo){
    $espcad = ListarEspecies();
    $conexao = obterConexao();
    foreach ($espcad as $ec){
        if ($ec["Tipo"] != $tipo) {
            $sql = "INSERT INTO Especie (Tipo) VALUES ('$tipo')";
            $_SESSION["msg"] = 'A espécie "'.$tipo.'" foi adicionada!';
            $_SESSION["tipo_msg"] = "alert-success";
        }else{
            $_SESSION["msg"] = 'A espécie "'.$tipo.'" já está cadastrada!';
            $_SESSION["tipo_msg"] = "alert-danger";
            header("Location:especie_form.php");
            die();
        }
    }
    mysqli_query($conexao, $sql);
    mysqli_close($conexao);
    header("Location:especie_form.php");
}
?>