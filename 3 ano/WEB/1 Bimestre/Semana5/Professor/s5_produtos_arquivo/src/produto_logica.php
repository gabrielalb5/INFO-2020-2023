<?php
  
  function inserirProduto($descricao, $preco, $estoque) {
    $nome_pasta = "../file";
    $nome_arquivo = "produtos.txt";
  
    if (!is_dir($nome_pasta)) {
      mkdir($nome_pasta);
    }
  
    $caminho_arquivo = "$nome_pasta/$nome_arquivo";
    $arquivo = fopen($caminho_arquivo, "a");
    
    fwrite($arquivo, $descricao . ";" . $preco . ";" . $estoque . PHP_EOL);
    fclose($arquivo);
  }

  function imprimirProdutos() {
    $caminho_arquivo = "../file/produtos.txt";
    $saida = '';

    if (file_exists($caminho_arquivo)) {
      $arquivo = fopen($caminho_arquivo, "r");
      while(!feof($arquivo)) {
        $linha = fgets($arquivo);
        $produto = explode(';', $linha);

        if (!empty($produto[0])) {
          $saida .= '
            <tr>
              <td>' . $produto[0] . '</td>
              <td>' . $produto[1] . '</td>
              <td>' . $produto[2] . '</td>
            </tr>
          ';
        }
      }
      fclose($arquivo);
    } else {
      $saida = '
        <tr>
          <td colspan="3">Não existem produtos cadastrados!</td>
        </tr>
      ';
    }    

    echo $saida; 
  }

?>