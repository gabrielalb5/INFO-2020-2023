<?php 
  /* Exemplo 1.1 */
  $notas = [ [10, 9, 8], 
             [8, 6, 10],
             [9, 7, 7] ];

  var_dump($notas);

  echo "<br><br>";

  echo "N1=" . $notas[0][0] . " N2=" . $notas[0][1] . " N3=" . $notas[0][2] . "<br>";
  echo "N1=" . $notas[1][0] . " N2=" . $notas[1][1] . " N3=" . $notas[1][2] . "<br>";  
  echo "N1=" . $notas[2][0] . " N2=" . $notas[2][1] . " N3=" . $notas[2][2] . "<br>";

  echo "<br>";

  $linhas = count($notas);
  for ($i = 0; $i < $linhas; $i++) {
    $colunas = count($notas[$i]); 
    for ($j = 0; $j < $colunas; $j++) {
      echo "{$notas[$i][$j]} ";
    } 
    echo "<br>"; 
  }

  echo "<br>";

  /* Exemplo 1.1 - foreach versão 1  */
  foreach ($notas as $linha) {
    echo "N1={$linha[0]} N2={$linha[1]} N3={$linha[2]}<br>"; 
  }

  /* Exemplo 1.1 - foreach versão 2  */
  echo "<br>";
  foreach ($notas as $linha) {
    $i = 1;
    foreach ($linha as $chave) {
      echo "N{$i}: {$chave} ";
      $i++;
    }
    echo "<br>";
  }

?> 