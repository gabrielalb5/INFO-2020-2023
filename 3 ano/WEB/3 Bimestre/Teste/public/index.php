<?php if(!isset($_SESSION)){
    session_start();
}
include("../include/cabecalho_semlogin.php");
require("../util/mensagens.php");
exibirmsg();?>
<center>
<div>
    <h3 class="m-4">Login</h3>
        <form action="../src/recupera_login.php" method="post">
            <div class="form-group">
                <input type="email" placeholder="E-mail" name="email" class="p-2 rounded-pill" required/><br><br>
            </div>
            <div class="form-group">
                <input type="password" placeholder="Senha" name="senha" class="p-2 rounded-pill" required/><br><br>
            </div>
            <input class="btn btn-outline-dark" type="submit" value="Entrar"/><br><br><br>
        </form>
        <a href="../src/admin_form.php" class="link text-decoration-none">Crie uma conta</a>
</div>
</center>
<?php include("../include/rodape.php"); ?>