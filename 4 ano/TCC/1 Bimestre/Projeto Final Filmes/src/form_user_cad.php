<?php
require("../database/user_bd.php");
require("../util/mensagens.php");
include("../include/cabecalho_semlogin.php");
exibirmsg();
?>
<div>
 <h4>Cadastro</h4>
    <form action="user_cad.php" method="post">
        <div>
            <label for="nome"><span class="material-symbols-outlined">person</span></label>
            <input type="text" placeholder="Nome" name="nome" id="nome" required><br><br>
        </div>
        <div>
            <label for="email"><span class="material-symbols-outlined">mail</span></label>
            <input type="text" placeholder="E-mail" name="email" id="email" required><br><br>
        </div>
        <div>
            <label for="senha"><span class="material-symbols-outlined">lock</span></label>
            <input type="password" placeholder="Senha" name="senha" id="senha" minlength="4" required><br><br>
        </div>
        <input class="btn btn-light" type="submit" value="Cadastrar"></br></br>
    </form>
</div>
<?php
include("../include/rodape.php");
?>