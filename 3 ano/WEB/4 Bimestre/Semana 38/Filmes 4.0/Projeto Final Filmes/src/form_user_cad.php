<?php
require("../database/user_bd.php");
require("../util/mensagens.php");
include("../include/cabecalho_semlogin.php");
exibirmsg();
?>
<div>
 <h3>Cadastro</h3>
    <form action="user_cad.php" method="post">
        <div>
            <input type="text" placeholder="Nome" name="nome" required><br><br>
        </div>
        <div>
            <input type="text" placeholder="E-mail" name="email" required><br><br>
        </div>
        <div>
            <input type="password" placeholder="Senha" name="senha" minlength="4" required><br><br>
        </div>
        <input type="submit" value="Cadastrar"></br></br>
    </form>
</div>
<?php
include("../include/rodape.php");
?>