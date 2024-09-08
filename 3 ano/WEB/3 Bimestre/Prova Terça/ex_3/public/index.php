<?php 
if(!isset($_SESSION)){
    session_start();
}
include("../include/cabecalho.php");
require("../util/mensagens.php");
exibirmsg(); ?>
<center>
    <div>
        <h3 class="m-4">Login</h3>
        <form action="../src/recupera_login.php" method="post">
            <div class="form-group">
                <input type="email" name="email" class="p-2 rounded-pill" placeholder="E-mail" required/><br><br>
            </div>
            <div class="form-group">
                <input type="password" name="senha" class="p-2 rounded-pill" placeholder="Senha" required/><br><br>
            </div>
            <input type="submit" class="btn btn-outline-dark"value="Entrar"/>
        </form>
    </div>
</center>
<?php include("../include/rodape.php"); ?>