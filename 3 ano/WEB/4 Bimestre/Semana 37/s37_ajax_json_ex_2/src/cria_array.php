<?php
  $vendas_associativo = [
    ["descricao" => "Caderno 200 fls.", "valor" => 4.5, "qtde" => 10],  
    ["descricao" => "Lápis nro 2", "valor" => 2.5, "qtde" => 6],
    ["descricao" => "Celular 64 GB", "valor" => 1900, "qtde" => 2] ];
  $arquivoJSON = json_encode($vendas_associativo);
  echo $arquivoJSON;
?>