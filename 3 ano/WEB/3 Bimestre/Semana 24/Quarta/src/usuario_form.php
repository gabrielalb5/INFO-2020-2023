<?php
require("../database/usuario_bd.php");
include("../include/cabecalho.php");
?>
<center>
<div class="mt-5">
 <h3 class="mb-3">Cadastrar Usuário</h3>
    <form action="usuario_cadastro.php" method="post">
        <div class="form-group">
            <label>Nome:</label>
            <input type="text" name="nome" required><br><br>
        </div>
        <div class="form-group">
            <label>E-mail:</label>
            <input type="text" name="email" required><br><br>
        </div>
        <div class="form-group">
            <label>Senha:</label>
            <input type="password" name="senha" required><br><br>
        </div>
        <input class="btn btn-outline-dark" type="submit" value="Cadastrar"></br></br>
    </form>
</div>
</center>
<?php
include("../include/rodape.php");
?>