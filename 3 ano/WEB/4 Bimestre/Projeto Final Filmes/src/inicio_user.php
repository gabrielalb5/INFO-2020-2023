<?php 
session_start();
if (!isset($_SESSION["usuario_logado"])) {
  header("Location: ../public/index.php");
}
?>
<?php
include("../include/cabecalho_user.php");
?>
  <section class="container">
    <?php if (isset($_SESSION["usuario_logado"])) { ?>
      <h4>Salve, cinéfilo!</h4>
      <p class="text-info">Logado como <?= $_SESSION["usuario_logado"] ?></p>
      <p>Você pode visualizar a lista de filmes e fazer comentários.</p>
    <?php } ?>
    <img src="https://static.wixstatic.com/media/47243f_1742b5f21a524af0935cb52d1a7c31cb~mv2.gif">
  </section>  
</body>
</html>