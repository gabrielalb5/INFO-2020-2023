<?php include("../include/cabecalho_motorista.php");
buscarMotorista();
$lista_tv = listarTipoVeiculo();
$lista_veiculos = listarVeiculos();
$contador_v = $_SESSION["veiculo_cont"];
$cidade = $_SESSION["usuario"]["cidade"];
$uf = $_SESSION["usuario"]["uf"];
$lista_pedidos = listarPedidos_motorista($cidade,$uf);
$saudacao = saudacao();?>
<div class="container">
    <div class="saudacao">
    <h2><?php echo $saudacao?></h2><br>
    <?php
        if($contador_v==0){
            echo '<h4 class="text-secondary">Ação necessária na conta</h4>
            <a href="perfil.php"><button type="button" class="btn btn-secondary">Adicionar veículo</button></a></div>';
        }else{
            if (empty($lista_pedidos)) { 
                echo '<h4 class="text-secondary">Não há pedidos disponíveis</h4></div>'?>
                <p class="text-secondary">Veja propostas já enviadas em <a href="perfil.php">Perfil</a></p>
                <img src="../assets/img/relaxado.png" alt="homem deitado relaxando" style="width:300px; padding:10px">
            <?php
            }else{
            echo '<h4>Pedidos</h4></div>';
            //echo '<p class="text-secondary">Solicitações disponíveis de acordo com sua localização</p>';
            echo '<p class="text-secondary">Veja propostas já enviadas em <a href="perfil.php">Perfil</a></p>';
            echo '<div id="pedidos">';
            $i = 0;
            foreach ($lista_pedidos as $pedido) {
                $data = $pedido["data_entrega"];
                $hora = $pedido["horario"];
            ?>
                <div id="card_pedido" class="col-6">
                    <p class="text-secondary"><span class="material-symbols-outlined">magic_button</span> <?php echo $pedido["status"]?></p>
                    <img src="../assets/img/caixa.png" alt="ilustração de caixa" style="width:100px;"/>
                    <h5><?php echo $pedido["descricao"]; ?></h5>
                    <p class="text-secondary"><?php echo $pedido["categoria"]?></p>
                    <p><span class="material-symbols-outlined">location_on</span> <?php echo $pedido["origem"]; ?></p>
                    <p><span class="material-symbols-outlined">arrow_forward</span> <?php echo $pedido["destino"]; ?></p>
                    <p><span class="material-symbols-outlined">calendar_month</span> <?php formataData($data); ?> às <?php formataHora($hora)?>h</p>
                    <button class="btn btn-secondary" id="botao_largo" data-bs-toggle="modal" data-bs-target="#modalproposta<?php echo $pedido["id_p"]?>"><span class="material-symbols-outlined">attach_money</span> Fazer proposta</button>
                </div>
                <div class="modal fade" id="modalproposta<?php echo $pedido["id_p"]?>" tabindex="-1" aria-labelledby="modalpropostaLabel" data-bs-backdrop="static" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="modalpropostaLabel">Faça sua proposta</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <h5><?php echo $pedido["descricao"]; ?></h5>
                    <p class="text-secondary"><span class="material-symbols-outlined">box</span> <?php echo $pedido["categoria"]?></p>
                    <p class="text-secondary"><span class="material-symbols-outlined">location_on</span> <?php echo $pedido["origem"]; ?></p>
                    <p class="text-secondary"><span class="material-symbols-outlined">arrow_forward</span> <?php echo $pedido["destino"]; ?></p>
                    <p class="text-secondary"><span class="material-symbols-outlined">calendar_month</span> <?php formataData($data); ?> às <?php formataHora($hora)?>h</p>
                    <form action="proposta.php" method="post">
                        <input type="hidden" name="pedido" value="<?php echo $pedido["id_p"] ?>">
                        <div class="textfield">
                        <label for="valor">Valor</label>
                        <input type="number" placeholder="Proponha uma oferta" id="valor" name="valor" min="0" max="99999999.99" step=".01" required></br>
                        </div>
                        <label for="valor">Veículo</label>
                        <select name="veiculo" id="veiculo" required>
                        <option value="">Escolha...</option>
                        <?php foreach ($lista_veiculos as $veiculo) : ?>
                            <option value='<?=$veiculo["renavam"]?>'>
                            <?=$veiculo["tipo"].' - '.$veiculo["placa"]?>
                            </option>
                        <?php endforeach ?>
                        </select>
                        <p class="text-secondary">Ao confirmar não será possível editar sua proposta.<br>Você será notificado caso seja escolhido.</p>
                        <input type="checkbox" id="concordo" required>
                        <label for="concordo">Entendi e desejo prosseguir</label>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                            <input type="submit" class="btn btn-primary" value="Confirmar">
                        </div>
                        </div>
                    </form>
                </div>
                </div>    
            <?php };
            echo '</div>';
            };
        };?>
</div>
<?php include("../include/rodape.php");?>