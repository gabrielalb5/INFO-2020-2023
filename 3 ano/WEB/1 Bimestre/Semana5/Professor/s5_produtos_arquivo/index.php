<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de produtos (Arquivo)</title>
    <link rel="stylesheet" href="css/estilo.css">
  </head>
  <body>
    <main>
      <section>
        <form action="src/produto_cadastro.php" method="post">
          <div class="flex-coluna">
            <label for="id_descricao">Descrição:</label>
            <input type="text" id="id_descricao" name="descricao" required>
          </div>
          <div class="flex-coluna">
            <label for="id_preco">Preço:</label>
            <input type="number" id="id_preco" name="preco" min="0.1" step="0.01" required>
          </div>
          <div class="flex-coluna">
            <label for="id_estoque">Estoque:</label>
            <input type="number" id="id_estoque" name="estoque" min="1" required>
          </div>         
          <input type="submit" value="Cadastrar">
        </form>
      </section> 
    </main> 
  </body>
</html>