<?php
require("../database/admin_bd.php");
include("../include/cabecalho_semlogin.php");
?>
<center>
<div class="mt-4">
 <h3 class="mb-4">Cadastrar Administrador</h3>
    <form action="admin_cadastro.php" method="post">
        <div class="form-group">
            <input type="text" class="p-2 rounded-pill" placeholder="Nome" name="nome" required><br><br>
        </div>
        <div class="form-group">
            <input type="text" class="p-2 rounded-pill" placeholder="E-mail" name="email" required><br><br>
        </div>
        <div class="form-group">
            <input type="password" class="p-2 rounded-pill" placeholder="Senha" name="senha" required><br><br>
        </div>
        <input class="btn btn-outline-dark" type="submit" value="Cadastrar"></br></br>
    </form>
</div>
</center>
<?php
include("../include/rodape.php");
?>