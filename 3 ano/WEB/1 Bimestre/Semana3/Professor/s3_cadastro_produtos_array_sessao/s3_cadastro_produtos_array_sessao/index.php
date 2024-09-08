<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de produtos (Array, Sessão)</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
  </head>
  <body> 
    <header class="container">
      <h5 class="text-center">Cadastro de produto (Array, Sessão):</h5>
    </header>
    <main class="container">
      <section>
        <div class="row">
          <div class="col-3"></div>
          <div class="col-6">
            <form action="src/cadastrar_produto.php" method="post">
              <div class="form-group">
                <label for="id_descricao">Descrição:</label>
                <input type="text" class="form-control" id="id_descricao" name="descricao" required>
              </div>
              <div class="form-group">
                <label for="id_preco">Preço:</label>
                <input type="number" class="form-control" id="id_preco" name="preco" min="0.1" step="0.01" required>
              </div>
              <div class="form-group">
                <label for="id_estoque">Estoque:</label>
                <input type="number" class="form-control" id="id_estoque" name="estoque" min="1" required>
              </div>         
              <input type="submit" class="btn btn-block btn-primary" value="Cadastrar">
            </form>
            <div>
              <table class="table table-striped table-bordered margem-superior">
                <tr class="text-center">
                  <th>Produto</th>
                  <th>Preço</th>
                  <th>Estoque</th>
                </tr>             
              
                <?php
                  include("src/produto_logica.php");
                  imprimirProdutos();
                ?>

              </table>
            </div>
          </div>
          <div class="col-3"></div>        
        </div>
      </section> 
    </main> 
  </body>
</html>