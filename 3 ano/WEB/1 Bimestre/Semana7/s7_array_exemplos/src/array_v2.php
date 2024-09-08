<?php 
  $nros = [ [10, 20, 30], [40, 50, 60], [70, 80, 90]]; 

  echo "Impressão for<br>";
  $qtde_elementos = count($nros);
  for ($i = 0; $i < $qtde_elementos; $i++) {
    $qtde_itens = count($nros[$i]);
    for ($j = 0; $j < $qtde_elementos; $j++) {
      echo $nros[$i][$j] . "<br>";
    }
  }

  echo "<br>Impressão foreach com &dollar;elemento e itens<br>";
  foreach ($nros as $elemento) {
    foreach ($elemento as $item) {
      echo $item . "<br>";
    }
  }

  echo "<br>Impressão foreach com &dollar;chave => &dollar;valor<br>";
  foreach ($nros as $chave => $valor) {
    echo $chave . "=>" . $valor[0] . "<br>";
    echo $chave . "=>" . $valor[1] . "<br>";
    echo $chave . "=>" . $valor[2] . "<br>";
  }

?>