<?php
  function inserirNumero($nro) {
    $resultado = $nro;
    if (isset($_SESSION["soma"])) {
      $resultado = $_SESSION["soma"];
      $resultado += $nro;
    } 
    $_SESSION["soma"] = $resultado;
    echo "Valor da soma: {$resultado}";
  }
  
  function removerSessao() {
    if (isset($_SESSION["soma"])) {    
      unset($_SESSION["soma"]);
      echo "Sessão removida com sucesso!";
    } else {
      echo "Não existe uma sessão registrada!";
    }  
  }
?>