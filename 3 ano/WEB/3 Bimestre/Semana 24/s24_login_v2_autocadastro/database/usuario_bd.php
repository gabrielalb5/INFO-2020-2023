<?php
require_once("conecta_bd.php");

function buscarUsuario($email, $senha) {
  $senha_md5 = md5($senha);
  $sql = "SELECT * FROM Usuario
          WHERE email = '$email' AND senha ='$senha_md5'";
  $conexao = obterConexao();
  $resultado = mysqli_query($conexao, $sql);
  return mysqli_fetch_assoc($resultado);
}

/*
mysqli_fetch_assoc
retorna uma matriz associativa representando a próxima linha 
no conjunto de resultados, ou null se não houver mais linhas.

MD5
MD5 (Message-Digest algorithm 5) é um algoritmo de hash de 128 bits
unidirecional criado em 1992. Sua utilização não é mais recomendada
para a criptografia de senhas, mas isso não impede nossa discussão.
*/
?>