<?php
require("../database/usuario_bd.php");
include("../include/cabecalho.php");
?>
<center>
<div class="mt-5">
 <h3 class="mb-3">Login</h3>
    <form action="recuperar_login.php" method="post">
        <div class="form-group">
            <label>E-mail:</label>
            <input type="text" name="email" max="255" required><br><br>
        </div>
        <div class="form-group">
            <label>Senha:</label>
            <input type="password" name="senha" max="50" required><br><br>
        </div>
            <input class="btn btn-outline-dark" type="submit" value="Entrar"></br></br>
        </form>
</div>
</center>
<?php include("../include/rodape.php"); ?>