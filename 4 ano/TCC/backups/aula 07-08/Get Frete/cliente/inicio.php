<?php include("../include/cabecalho_cliente.php");
buscarCliente();
$saudacao = saudacao();
$lista_cp = listarCategoriaPedido();
$lista_avaliacao = status_avaliacao();?>
<div class="container">
    <div class="saudacao">
    <h2><?php echo $saudacao?></h2><br>
    </div>
    <div id="avaliacoes">
    <?php 
        foreach($lista_avaliacao as $pedido){?>
        <div id="card_avaliacao">
                <h5>Como você avalia a entrega de <?php echo $pedido["motorista"] ?>?</h5>
                <p class="text-secondary"><?php echo $pedido["descricao"] ?> - <?php formataData($pedido["data_entrega"]); ?> às <?php formataHora($pedido["horario"])?>h</p>
                <div id="texto" class="d-flex justify-content-between m-0">
                    <p>1</p>
                    <input type="range" class="form-range w-50" min="1" max="5">
                    <p>5</p>
                </div>
                <form action="" method="post" class="w-100">
                    <input type="hidden" value="<?php echo $pedido["id_p"] ?>" name="id_p">
                    <button class="btn mt-0" id="btn_azul">Avaliar</button>
                </form>
        </div>
    <?php };
    ?>
    </div>
    <div id="form_pedido">
    <h4>O que você precisa transportar?</h4>
    <p class="text-secondary">Veja seus pedidos em <a href="perfil.php">Perfil</a></p>
    <form action="pedido.php" method="post">
    <div id="colunas">
        <div id="col1">
            <div class="textfield">
                <label for="descricao">Descrição</label>
                <input type="text" placeholder="O que será transportado?" id="descricao" name="descricao" required>
            </div>
            <div class="textfield">
                <label for="origem">Endereço de retirada</label>
                <input type="text" placeholder="Rua/Av., número, cidade e estado" id="origem" name="origem" required>
            </div>
            <div class="textfield">
                <label for="destino">Endereço de entrega</label>
                <input type="text" placeholder="Rua/Av., número, cidade e estado" id="destino" name="destino" required>
            </div>
        </div>
        <div id="col2">
            <div class="textfield">
                <label for="categoria">Categoria</label>
                <select name="categoria" id="categoria" required>
                    <option value="">Escolha...</option>
                    <?php foreach ($lista_cp as $categoria) : ?>
                        <option value='<?=$categoria["id_cp"]?>'>
                        <?=$categoria["nome"]?>
                        </option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="textfield">
                <label for="data_entrega">Quando?</label>
                <input type="date" id="data_entrega" name="data_entrega" required>
            </div>
            <div class="textfield">
                <label for="horario">Horário</label>
                <input type="time" id="horario" name="horario" required>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center flex-column">
    <p class="text-secondary">Ao enviar o pedido não será possível editá-lo.<br>Você será notificado ao receber propostas.</p>
    <div class="form-check">
    <input type="checkbox" id="concordo" required>
    <label for="concordo"> Entendi e desejo prosseguir</label>
    </div>
    </div>
    <input type="submit" class="btn" id="btn_azul" value="Enviar pedido"><br>
    </form>
    </div>
</div>
<?php include("../include/rodape_cliente.php");?>