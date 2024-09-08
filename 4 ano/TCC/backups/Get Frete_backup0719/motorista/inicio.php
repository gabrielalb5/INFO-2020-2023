<?php include("../include/cabecalho_motorista.php");
buscarUsuario();
$lista_tv = listarTipoVeiculo();
$lista_veiculos = listarVeiculos();
$contador_v = $_SESSION["veiculo_cont"];
$cidade = $_SESSION["usuario"]["cidade"];
$uf = $_SESSION["usuario"]["uf"];
$lista_pedidos = listarPedidos_motorista($cidade,$uf);
$saudacao = saudacao();?>
<div class="container">
    <div class="inicio">
    <h2><?php echo $saudacao?></h2><br>
    <?php
        if($contador_v==0){
            echo '<h4 class="text-secondary">Ação necessária na conta</h4>
            <a href="perfil.php"><button type="button" class="btn btn-secondary">Adicionar veículo</button></a>';
        }else{
            if (empty($lista_pedidos)) { 
                echo '<h4 class="text-secondary"> Não há pedidos disponíveis</h4>'?>
                <img src="../assets/img/relaxado.png" alt="homem deitado relaxando" style="width:300px; padding:10px">
            <?php
            }else{
            echo '<h4>Pedidos disponíveis</h4>';
            echo '<div id="pedidos">';
            foreach ($lista_pedidos as $pedido) {
                $data = $pedido["data_entrega"];
                $hora = $pedido["horario"];
            ?>
                <div id="card_pedido">
                    <p class="text-secondary"><span class="material-symbols-outlined">magic_button</span> <?php echo $pedido["status"]?></p>
                    <img src="../assets/img/caixa.png" alt="ilustração de caixa" style="width:100px;"/>
                    <h5><?php echo $pedido["descricao"]; ?></h5>
                    <p class="text-secondary"><?php echo $pedido["categoria"]?></p>
                    <p><span class="material-symbols-outlined">location_on</span> <?php echo $pedido["origem"]; ?></p>
                    <p><span class="material-symbols-outlined">arrow_forward</span> <?php echo $pedido["destino"]; ?></p>
                    <p><span class="material-symbols-outlined">calendar_month</span> <?php formataData($data); ?> às <?php formataHora($hora)?>h</p>
                    <button class="btn btn-secondary" id="botao_largo"><span class="material-symbols-outlined">attach_money</span> Fazer proposta</button>
                </div>
                
            <?php };
            echo '</div>';
            };
        };?>
    </div>
</div>
<?php include("../include/rodape.php");?>