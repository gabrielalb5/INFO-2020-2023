<?php

function exibirMsg() {
  $mensagem = "";
  if(!empty($_SESSION["msg"])){
    $mensagem = $_SESSION["msg"];
  }
  if (!empty($mensagem)) :
  ?>
    <p class="alert alert-success text-center">
      <?=$mensagem?>
    </p>  
  <?php
  endif;
  $_SESSION["msg"] = "";
}

?>