<?php
require("../database/user_bd.php");
require("../util/mensagens.php");
include("../include/cabecalho_semlogin.php"); 
exibirmsg();
?>
<div>
 <h3>Login</h3>
    <form>
        <div>
            <input type="text" placeholder="E-mail" id="id_email" name="email" required></br></br>
        </div>
        <div>
            <input type="password" placeholder="Senha" id="id_senha" name="senha" required></br></br>
        </div>
            <input type="button" id="btn_login" value="Entrar">
    </form>
    <div id="id_msg"></div>
    <a href="../src/form_user_cad.php">Crie uma conta</a>
</div>
<?php include("../include/rodape.php")?>