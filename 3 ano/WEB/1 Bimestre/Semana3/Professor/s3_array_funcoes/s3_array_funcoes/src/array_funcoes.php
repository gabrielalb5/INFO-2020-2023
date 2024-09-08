<?php 
  $cidades = ["Matão", "Araraquara", "São Carlos", "Rio Claro"];

  foreach($cidades as $cidade){
    echo "{$cidade} ";
  }  

  echo "<br><br>Quantidade de elementos: ";
  echo count($cidades);
  echo "<br>var_dump: ";
  var_dump($cidades);

  echo "<br><br>Adicionar elemento no início do array: array_unshift()<br>";
  array_unshift($cidades, "Ibaté");
  var_dump($cidades);

  echo "<br><br>Adicionar elemento no final do array: array_push()<br>";
  array_push($cidades, "Descalvado");
  var_dump($cidades);

  echo "<br><br>Ordenar os elementos do array (ordem crescente): sort()<br>";
  sort($cidades);
  var_dump($cidades);

  echo "<br><br>Ordenar os elementos do array (ordem decrescente): rsort()<br>";
  rsort($cidades);
  var_dump($cidades);  

  echo "<br><br>Remover o primeiro elemento do array: array_shift()<br>";
  array_shift($cidades);
  var_dump($cidades); 

  echo "<br><br>Remover o último elemento do array: array_pop()<br>";
  array_pop($cidades);
  var_dump($cidades);   

  echo "<br><br>Remover (destruir) uma chave do array: unset()<br>";
  /* Importante: O array não será reindexado */
  unset($cidades[2]);
  var_dump($cidades);

?> 

<!-- 
  Para consultar mais funções, acesse:
  https://www.php.net/manual/pt_BR/ref.array.php
-->