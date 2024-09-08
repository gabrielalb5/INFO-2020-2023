<?php 
  /* Exemplo 2.1 */
  $notas = [ 
    ["Antônio", 10, 9, 8],  
    ["Maria", 9, 9, 7],
    ["José", 5, 7, 4] ];
  
  foreach ($notas as $linha) {
    echo "Nome: {$linha[0]} - N1={$linha[1]} N2={$linha[2]} N3={$linha[3]}<br>"; 
  }

  /* Exemplo 2.2 */
  $notas = [ 
    "antonio" => [10, 9, 8],  
    "maria" => [9, 9, 7],
    "jose" => [5, 7, 4] ];

  echo "<br>";

  foreach ($notas as $nome => $provas) {
    echo "Nome: {$nome} - ";
    foreach ($provas as $indice => $valor) {
      $i = $indice + 1;
      echo "N{$i}: {$valor} ";
    }
    echo "<br>";
  }

  /* Exemplo 2.3 */
  $notas = [ 
    "antonio" => ["nome" => "Antônio", "provas" => [10, 9, 8]],  
    "maria" => ["nome" => "Maria", "provas" => [9, 9, 7]],
    "jose" => ["nome" => "José", "provas" => [5, 7, 4] ]];

  echo "<br>"; 

  foreach ($notas as $nome => $boletim) {
    echo "{$boletim["nome"]} ";
    echo "{$boletim["provas"][0]} {$boletim["provas"][1]} {$boletim["provas"][2]}<br>";
  }

  echo "<br>"; 

  foreach ($notas as $nome => $boletim) {
    echo "{$boletim["nome"]} ";
    foreach ($boletim["provas"] as $nota) {
      echo "{$nota} ";
    }
    echo "<br>";
  }

?>