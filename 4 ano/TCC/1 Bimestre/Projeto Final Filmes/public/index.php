<?php
require("../database/user_bd.php");
require("../util/mensagens.php");
include("../include/cabecalho_semlogin.php"); 
exibirmsg();
?>
<div>
 <h4>Login</h4>
 <div id="id_msg"></div>
    <form>
        <div class="input-box">
            <label for="email"><span class="material-symbols-outlined">mail</span></label>
            <input type="text" placeholder="E-mail" id="id_email" name="email" id="email" required></br></br>
        </div>
        <div class="input-box">
            <label for="senha"><span class="material-symbols-outlined">lock</span></label>
            <input type="password" placeholder="Senha" id="id_senha" name="senha" id="senha" required></br></br>
        </div><br>
        <input class="btn btn-light" type="button" id="btn_login" value="Entrar">
    </form><br>
    <a href="../src/form_user_cad.php" class="link link-light">Crie uma conta</a>
</div>
<?php include("../include/rodape.php")?>