<?php
  session_start();
  include("criterios_avaliacao.php");

  $nome = $_POST["nome"];
  $n1 = $_POST["nota1"];
  $n2 = $_POST["nota2"];
  $presenca = $_POST["presenca"];

  if (validarFrequencia($presenca)) {
    $media = calcularMedia($n1, $n2);
    $situacao = "Aluno: {$nome} Média: {$media} Situação: ";
    if (validarMedia($media)) {
      $situacao .= "Aprovado!";
    } else {
      $_SESSION["nome"] = $nome;
      header("Location: reavaliacao.php");
      die();
    }
  } else {
    $situacao = "Aluno: {$nome} reprovado por frequência: {$presenca}%";
  }

  $_SESSION["msg"] = $situacao;
  header("Location: resultado_avaliacao.php");
?>