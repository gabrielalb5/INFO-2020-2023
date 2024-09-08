<?php 
session_start();
if (!isset($_SESSION["usuario_logado"])) {
  header("Location: ../public/index.php");
}
?>
<?php
include("../include/cabecalho_admin.php")
?>
  <section class="container">
    <?php if (isset($_SESSION["usuario_logado"])) { ?>
      <h4>Bem-vindo à Matrix!</h4>
      <p class="text-success">Logado como <?= $_SESSION["usuario_logado"] ?></p>
      <p>Você possui acesso à funções de edição, inserção e remoção de filmes.<!--<br>Que a força esteja com você.--></p>
    <?php } ?>
    <img src="https://i.imgur.com/kMvnYUB.gif" style="height:400px;">
  </section>  
</body>
</html>