<?php 
session_start();
if (!isset($_SESSION["usuario_logado"])) {
  header("Location: ../public/index.php");
}
$usuario = $_SESSION["dados_logado"];
?>
<?php
include("../include/cabecalho_admin.php")
?>
  <section class="container">
    <?php if (isset($_SESSION["usuario_logado"])) { ?>
      <h4>Bem-vindo à Matrix!</h4>
      <p class="text-success">Logado como <?= $usuario["Nome"] ?></p>
      <p>Você possui acesso à funções de cadastro, edição e remoção de filmes.<!--<br>Que a força esteja com você.--></p>
    <?php } ?>
    <img src="https://i.imgur.com/kMvnYUB.gif" style="height:400px;">
  </section>  
</body>
</html>