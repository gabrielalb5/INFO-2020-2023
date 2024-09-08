<?php
require("../database/user_bd.php");
include("../include/cabecalho_user.php");
$user = $_SESSION["dados_logado"];
//var_dump($user);
?>
<div>
 <h4>Editar cadastro</h4>
    <form action="user_cad_ed.php" method="post">
        <input type="hidden" name="id_u" value="<?=$user["id_u"]?>">
        <div>
            <label>Nome:</label>
            <input type="text" placeholder="Nome" name="nome" value="<?=$user["Nome"]?>" required><br><br>
        </div>
        <div>
            <label>Email:</label>
            <input type="text" placeholder="E-mail" value="<?=$user["Email"]?>" disabled required><br><br>
            <input type="hidden" name="email" value="<?=$user["Email"]?>">
            <p class="text-secondary">Seu e-mail não pode ser alterado<br>por questões de segurança</p>
        </div>
        <div>
            <label>Senha:</label>
            <input type="password" placeholder="Senha" name="senha" minlength="4"  value="<?=$user["Senha"]?>"required><br><br>
        </div>
        <input class="btn btn-info" type="submit" value="Editar"></br></br>
    </form>
</div>
<?php
include("../include/rodape.php");
?>