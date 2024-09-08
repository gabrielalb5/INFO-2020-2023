<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação Aprovação</title>
    <link rel="stylesheet" href="css/estilo.css">    
  </head>
  <body>
    <header>  
      <h4>Verificação de notas e frequência:</h4>
    </header>  
    <section>
      <form action="src/verifica_aprovacao.php" method="post">
        <div class="flex-coluna">
          <label>Nome:</label>
          <input type="text" name="nome" required>
        </div>       
        <div class="flex-coluna">
          <label>Nota 1:</label>
          <input type="number" name="nota1" min="0" max="10" step="0.1">
        </div>  
        <div class="flex-coluna">
          <label>Nota 2:</label>
          <input type="number" name="nota2" min="0" max="10" step="0.1">  
        </div> 
        <div class="flex-coluna">
          <label>Presença (%):</label>
          <input type="number" name="presenca" min="0" max="100" step="1">  
        </div>                         
        <div>
          <input type="submit" value="Verificar">
        </div>  
      </form> 
    </section>  
    <footer>
    </footer>
  </body>
</html> 