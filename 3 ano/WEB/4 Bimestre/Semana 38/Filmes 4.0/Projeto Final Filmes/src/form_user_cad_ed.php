<?php
require("../database/user_bd.php");
include("../include/cabecalho_semlogin.php");
$user = $_SESSION["dados_logado"];
?>
<div>
 <h3>Editar cadastro</h3>
    <form action="user_cad.php" method="post">
        <div>
            <input type="text" placeholder="Nome" name="nome" value="<?=$user["Nome"]?>" required><br><br>
        </div>
        <div>
            <input type="text" placeholder="E-mail" name="email" value="<?=$user["Email"]?>" required><br><br>
        </div>
        <div>
            <input type="password" placeholder="Senha" name="senha" minlength="4"  value="<?=$user["Senha"]?>"required><br><br>
        </div>
        <input type="submit" value="Cadastrar"></br></br>
    </form>
</div>
<?php
include("../include/rodape.php");
?>