<?php include("../include/cabecalho_cliente.php");
buscarUsuario();
buscarImagem();
//var_dump($_SESSION["usuario"]);
//var_dump($_SESSION["imagem"]);
?>
<div class="container">
    <div class="cabecalho">
    <div class="row">
        <div class="col col-lg-2">
        <img id="foto_perfil" src="<?=$_SESSION["imagem"]["path"]?>" alt="Foto de perfil de <?=$_SESSION["usuario"]["nome_social"]?>" class="rounded-circle img-fluid"/>
        </div>
        <div class="col-md-auto">
        <h2><?php echo $_SESSION["usuario"]["nome"] . ' ' . $_SESSION["usuario"]["sobrenome"];?></h2>
        <p><span class="material-symbols-outlined">location_on</span> <?php echo $_SESSION["usuario"]["cidade"] . ' - ' . $_SESSION["usuario"]["uf"];?><p>
        <p><span class="material-symbols-outlined">call</span> <?php echo $_SESSION["usuario"]["telefone"]?><p>
        </div>
        <div class="col">
        3 of 3
        </div>
    </div>    
    </div>
</div>
<?php include("../include/rodape_inicio.php");?>