<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Principal</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
  <section class="container">
    <h4>Página Principal</h4>

    <?php 
    if (isset($_COOKIE["usuario_logado"])) { ?>
      <p class="text-success">Logado como <?= $_COOKIE["usuario_logado"] ?></p>
    <?php } else {
      header("Location: ../public/index.php");
    } 
    ?>

    <a href="../public/index.php">Voltar</a>   
  </section>  
</body>
</html>