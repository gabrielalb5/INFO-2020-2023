<?php 
session_start();
if(!isset($_SESSION["usuario_logado"])){
  header("Location:../public/index.php");
}
?>
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

    <?php if (isset($_SESSION["usuario_logado"])) { ?>
      <p class="text-success">Logado como <?= $_SESSION["usuario_logado"] ?></p>
    <?php } ?>

    <a href="../src/logout.php">Sair</a>   
  </section>  
</body>
</html>