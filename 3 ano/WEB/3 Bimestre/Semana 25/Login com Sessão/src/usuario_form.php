<?php
require("../database/usuario_bd.php");
include("../include/cabecalho.php");
?>
<center>
<div class="mt-5">
 <h3 class="mb-3 text-white">Cadastrar Usuário</h3>
    <form action="usuario_cadastro.php" method="post">
        <div class="form-group">
            <input type="text" class="p-2 rounded-pill" placeholder="Nome" name="nome" required><br><br>
        </div>
        <div class="form-group">
            <input type="text" class="p-2 rounded-pill" placeholder="E-mail" name="email" required><br><br>
        </div>
        <div class="form-group">
            <input type="password" class="p-2 rounded-pill" placeholder="Senha" name="senha" required><br><br>
        </div>
        <input class="btn btn-outline-light" type="submit" value="Cadastrar"></br></br>
    </form>
</div>
</center>
<?php
include("../include/rodape.php");
?>