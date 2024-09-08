<?php
$servidor = "localhost";
$usuario = "web";
$senha = "web";
$banco = "ifsp";

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

if (!$conexao) {
  echo "Não foi possível conectar ao banco de dados! Erro: " . mysqli_connect_error();
  die();  
}

echo "Conexão realizada com sucesso!";

mysqli_close($conexao);

?>

<!--
1) "mysqli" significa MySQL improved

2) mysqli_connect($servidor, $usuario, $senha, $banco)
Retorna um objeto que representa a conexão com o MySQL. Se a conexão falhar, retorna false.

3) mysqli_connect_error()
Retorna uma string com a descrição do erro que ocorreu na última chamada da função mysqli_connect().
Se não houve erro, a função irá retornar uma string vazia. 
-->