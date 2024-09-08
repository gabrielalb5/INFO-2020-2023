<?php
  //session_start();
  
  function inserirProduto($descricao, $preco, $estoque) {
    $novo_produto = ["descricao" => $descricao, "preco" => $preco, "estoque" => $estoque];

    if (isset($_SESSION["produtos"])) {
      $lista_produtos = $_SESSION["produtos"];
    } else {
      $lista_produtos = [];
    }

    array_push($lista_produtos, $novo_produto);
    $_SESSION["produtos"] = $lista_produtos;
  }

  function imprimirProdutos() {
    $saida = '';
    if (isset($_SESSION["produtos"])) {
      $produtos = $_SESSION["produtos"];
      foreach ($produtos as $produto) {
        $saida .= '
          <tr class="text-center">
            <td>' . $produto["descricao"] . '</td>
            <td>' . $produto["preco"]     . '</td>
            <td>' . $produto["estoque"]   . '</td>
          </tr>
        ';
      }
    } else {
      $saida = '
        <tr class="text-center text-danger">
          <td colspan="3">Não existem produtos cadastrados!</td>
        </tr>
      ';
    } 
    echo $saida;   
  }

?>