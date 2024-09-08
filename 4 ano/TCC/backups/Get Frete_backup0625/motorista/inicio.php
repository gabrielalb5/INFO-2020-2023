<?php include("../include/cabecalho_motorista.php");
buscarUsuario();
$lista_tv = listarTipoVeiculo();
$lista_veiculos = listarVeiculos();
$contador_v = $_SESSION["veiculo_cont"];
$saudacao = saudacao();?>
<div class="container">
    <div class="inicio">
    <h2><?php echo $saudacao?></h2><br>
    <?php
        if($contador_v==0){
            echo '<h4 class="text-secondary">Ação necessária na conta</h4>
            <a href="perfil.php"><button type="button" class="btn btn-secondary">Adicionar veículo</button></a>';
        }else{?>
            <h4 class="text-secondary">Pedidos disponíveis</h4>
    <?php } ?>
    </div>
</div>
<?php include("../include/rodape.php");?>