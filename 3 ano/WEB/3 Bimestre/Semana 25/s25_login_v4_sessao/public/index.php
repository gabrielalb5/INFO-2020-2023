<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login (sessão)</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/css/estilo.css">
</head>
<body>
  <header class="container cabecalho">
    <div class="row">
      <div class="col">
        <h3>Shopping Virtual</h3>
      </div>
    </div>
  </header>
  <main class="container formulario">  
    <div class="row">
      <div class="col-8">
        <ul>
          <li class="text-secondary lista-margem">Login utilizando sessão para armazenar o usuário</li>
        </ul>
      </div>
      <div class="col-4">
          <h5 class="text-center">Login</h5>
          <form action="../src/valida_login.php" method="post">
            <div class="form-group">
              <label for="id_email">Usuário:</label> 
              <input type="email" class="form-control" id="id_email" name="email">
            </div>
            <div class="form-group">
              <label for="id_senha">Senha:</label> 
              <input type="password" class="form-control" id="id_senha" name="senha">
            </div>
            <div class="text-center">    
              <input type="submit" class="btn btn-primary btn-block" value="Entrar">
            </div>  
          </form>
      </div>
    </div> 
    <div class="row">
      <div class="col-8"></div>
      <div class="col-4 text-center criar-conta">
        <a href="../src/form_criar_conta.php">Crie uma conta</a>
      </div>
    </div>       
  </main>  
</body>
</html>