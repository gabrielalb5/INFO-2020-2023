<?php
  session_start();
  include("../include/cabecalho.php");  

  if (isset($_SESSION["msg"])) {
    echo $_SESSION["msg"];
    unset($_SESSION["msg"]);
  } else {
    echo "Não foi possível verificar a situação do estudante!";
  }

  echo "<p><a href=\"../index.php\">Voltar</a></p>"; 
  include("../include/rodape.php");  
?>  