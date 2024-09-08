<?php include("../include/cabecalho_cliente.php");
buscarUsuario();
$saudacao = saudacao();
$lista_cp = listarCategoriaPedido();?>
<div class="container">
    <div class="saudacao">
    <h2><?php echo $saudacao?></h2><br>
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
    <!--<a class="link-secondary" id="rota_mapa" href="">Traçar rota no mapa</a><br>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d118560.8106346599!2d-48.24014352007688!3d-21.779280565452694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94b8f15fecb7508b%3A0xbdaebe35da49b086!2sAraraquara%2C%20SP!5e0!3m2!1spt-BR!2sbr!4v1687667747705!5m2!1spt-BR!2sbr" width="800" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>-->
    </div>
</div>
<?php include("../include/rodape.php");?>