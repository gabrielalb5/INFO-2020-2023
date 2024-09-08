<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8">
    <title>Array Multidimensional (Livros)</title>
    <link rel="stylesheet" href="css/estilo.css">
  </head>
  <body>  
    <header>  
      <h4>Exercício 4 - Cadastro de livros</h4>
      <p>
        Elabore uma aplicação web que realize o cadastro de livros (título, autor, ano de publicação e 
        editora). Os dados inseridos no formulário devem ser armazenados em um array. A aplicação também
        deve incluir uma página para exibir os dados armazenados.
      </p>
    </header>
    <section>
      <form action="src/livro_cadastro.php" method="post">        
        <div class="flex-coluna">
          <label for="id_titulo">Título:</label>
          <input type="text" id="id_titulo" name="titulo" required>
        </div>
        <div class="flex-coluna">
          <label for="id_autor">Autor:</label>
          <input type="text" id="id_autor" name="autor" required>
        </div>
        <div class="flex-coluna">
          <label for="id_ano">Ano de publicação:</label>
          <input type="number" id="id_ano" name="ano" min="1455" step="1" required>
        </div>
        <div class="flex-coluna">
          <label for="id_editora">Editora:</label>
          <input type="text" id="id_editora" name="editora" required>
        </div>                 
        <input type="submit" value="Cadastrar"><br><br>
        <a href="src/tabela_livros.php">Livros Cadastrados</a>
        <a href="src/fim_sessao.php">Encerrar Sessão</a>
      </form>     
    </section>  
  </body>
</html>