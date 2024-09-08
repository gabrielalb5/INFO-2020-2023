<?php 
require("../database/user_bd.php");
include("../include/cabecalho_user.php");
require("../util/mensagens.php");
exibirmsg();
//$id_u = $_SESSION["id_usuario_logado"];
//var_dump($id_u);
//$user = userLogado($id_u);
$user = $_SESSION["dados_logado"];
//var_dump($user);?>
<div class="dados_perfil">
<h5>Código ID: <span class="text-info"><?=$user["id_u"]?></span></h5>
<h5>Nome: <span class="text-info"><?=$user["Nome"]?></span></h5>
<h5>E-mail: <span class="text-info"><?=$user["Email"]?></span></h5>
<h5>Senha: <span class="text-info"><?=$user["Senha"]?></span></h5><br>
<a class="btn btn-info" href="form_user_cad_ed.php">Editar Cadastro</a>
</div>
<?php include("../include/rodape.php");?>