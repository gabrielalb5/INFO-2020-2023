<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de produtos (Arquivo)</title>
    <link rel="stylesheet" href="../css/estilo.css">
  </head>
  <body> 
    <main>
        <table border="1">
          <tr>
            <th>Produto</th>
            <th>Preço</th>
            <th>Estoque</th>
          </tr>             
              
          <?php
            include("produto_logica.php");
            imprimirProdutos();
          ?>

        </table>
        <br>
        <p><a href="../index.php">Voltar para cadastro</a></p>      
    </main> 
  </body>
</html>