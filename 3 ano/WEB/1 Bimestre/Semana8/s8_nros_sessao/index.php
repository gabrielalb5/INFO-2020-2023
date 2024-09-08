<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8">
    <title>Sessão - Exemplo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">    
    <link rel="stylesheet" href="css/estilo.css">
  </head>
  <body>  
    <header>  
      <h4>Exercício 1 - Números em sessão</h4>
      <p>
        Escreva um programa que leia um número e o armazene na sessão. Após isso, todo novo número 
        informado pelo usuário deve ser somado ao valor anterior e o resultado armazenado na sessão 
        novamente. O usuário também pode remover a sessão a qualquer momento, reiniciando o processo.
      </p>
    </header>
    <section>
      <form action="src/nros_cadastro.php" method="post">
        <div class="form-group">
          <label for="id_autor">Informe um número:</label>
          <input type="number" class="form-control" id="id_nro" name="nro" value="0">
        </div>  
        <div>             
          <input type="submit" class="btn btn-block btn-primary" name="cadastro" value="Cadastrar">
          <input type="submit" class="btn btn-block btn-warning" name="remocao" value="Remover Sessão">
        </div>
      </form>     
    </section>  
  </body>
</html>