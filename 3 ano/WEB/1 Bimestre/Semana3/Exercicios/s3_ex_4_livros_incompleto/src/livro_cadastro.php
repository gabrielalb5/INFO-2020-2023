<?php
  include("livro_logica.php");

  $titulo = $_POST["titulo"];
  $autor = $_POST["autor"];
  $ano = $_POST["ano"];
  $editora = $_POST["editora"];

  inserirLivro($titulo, $autor, $ano, $editora);
  header("Location:../index.php");
?> 