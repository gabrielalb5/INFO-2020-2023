<?php 
  $nros = array(14, 26, 37, 49, 53, 65);
  var_dump($nros);

/* Representação do armazenamento dos valores em $nros:
  $nros {
    [0] = 14
    [1] = 26
    [2] = 37
    [3] = 49
    [4] = 53
    [5] = 65  } 
*/

  $notas = array();
  $notas[] = 9;
  $notas[2] = 8;
  $notas[] = 12;
  echo "<br><br>";
  var_dump($notas);

/* Representação do armazenamento dos valores em $notas:
  $notas {
    [0] = 9
    [2] = 8    
    [3] = 12  } 
*/

  $paises = [];
  $paises[] = "Brasil";
  $paises[] = "Chile";
  $paises[] = "Itália";
  $paises[] = "Portugal";

  echo "<br>";
  for ($i = 0; $i < sizeof($paises); $i++) {
    echo "<br>" . $paises[$i];
  }

  echo "<br><br>";
  var_dump($paises);

/* Representação do armazenamento dos valores em $paises:
  $paises {
    [0] = "Brasil"
    [1] = "Chile"  
    [2] = "Itália"       
    [3] = "Portugal"  } 
*/

  $medias = ["antonio" => 8.5, "maria" => 10, "jose" => 9];

/* Representação do armazenamento dos valores em $medias:
  $paises {
    ["antonio"] = 8.5
    ["maria"] = 10  
    ["jose"] = 9  } 
*/

  echo "<br><br>";
  var_dump($medias);
?>

<!-- 
var_dump()
Exibe a representação da estrutura de uma variável, incluindo as 
informações armazenadas nela.
-->