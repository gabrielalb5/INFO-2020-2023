<?php include("../include/cabecalho_cliente.php");
buscarUsuario();
buscarImagem();
$usuario = $_SESSION["usuario"];
$imagem = $_SESSION["imagem"];
$lista_pedidos = listarPedidos_cliente();
?>
<div class="container">
    <div class="cabecalho">
        <div class="row">
            <div class="col-5">
            <div id="foto_perfil">
            <img src="<?=$imagem["path"]?>" alt="Foto de perfil de <?=$usuario["nome"]?>"/>
            </div>
            </div>
            <div class="col-6">
            <h2><?php echo $usuario["nome"] . ' ' . $usuario["sobrenome"];?></h2>
            <p><span class="material-symbols-outlined">location_on</span> <?php echo $usuario["cidade"] . ' - ' . $usuario["uf"];?><p>
            <p><span class="material-symbols-outlined">call</span> <?php echo $usuario["telefone"]?><p>
            </div>
            <div class="col-1">
            <a class="link-secondary" id="link" data-bs-toggle="modal" data-bs-target="#config"><span class="material-symbols-outlined">settings</span></a>
            </div>
        </div>    
    </div>
    <!--Modal de configurações-->
    <div class="modal fade" id="config" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="configLabel">Configurações</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <a class="link link-secondary" data-bs-toggle="modal" data-bs-target="#editar"><span class="material-symbols-outlined">stylus_note</span> Editar perfil</a><br>
            <a class="link-danger" id="link" onclick="alert_deletar()"><span class="material-symbols-outlined">delete</span> Excluir minha conta</a>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        </div>
        </div>
    </div>
    </div>
    <!--Modal de edição de perfil-->
    <div class="modal fade" id="editar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editarLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="ediarLabel">Editar dados</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form  enctype="multipart/form-data" action="editar_dados.php" method="post">
                <div class="textfield">
                    <label for="nome">Nome</label>
                    <input type="text" placeholder="Nome" id="nome" name="nome" value="<?php echo $usuario["nome"] ?>" required>
                </div>
                <div class="textfield">
                    <label for="sobrenome">Sobrenome</label>
                    <input type="text" placeholder="Sobrenome" id="sobrenome" name="sobrenome" value="<?php echo $usuario["sobrenome"] ?>" required>
                </div>
                <div class="textfield">
                    <label for="email">E-mail</label>
                    <input type="email" placeholder="E-mail" id="email" name="email" value="<?php echo $usuario["email"] ?>" style="cursor:not-allowed;" disabled required>
                    <p class="text-secondary text-center">O e-mail não pode ser alterado por questões de segurança.</p>
                </div>
                <div class="textfield">
                    <label for="senha">Senha</label>
                    <input type="password" placeholder="Senha" id="senha" name="senha" onkeyup="validarSenha()" value="<?php echo $_SESSION["senha"] ?>" required>
                    <p id="mensagem"></p>
                </div>
                <div class="textfield">
                    <label for="cpf">CPF</label>
                    <input type="text" placeholder="xxx.xxx.xxx-xx" id="cpf" name="cpf" maxlength="14" minlength="14" value="<?php echo $usuario["cpf"] ?>" required></br>
                </div>
                <div class="textfield">
                    <label for="telefone">Telefone</label>
                    <input type="text" placeholder="(xx) xxxxx-xxxx" id="telefone" name="telefone" maxlength="15" minlength="14" value="<?php echo $usuario["telefone"] ?>" required></br>
                </div>
                <div class="textfield">
                    <label for="localizacao">Localização</label>
                    <p><?php echo $usuario["cidade"] . ' - ' . $usuario["uf"];?><br>
                    <input type="checkbox" id="localizacao" onchange="toggleContent()">
                    <label for="localizacao"> Editar</label>
                    </p>
                        <div id="hiddenContent" class="hidden">
                            <div class="textfield">
                            <label for="uf">UF</label>
                            <select name="uf" id="uf">
                                <option value="">Escolha...</option>
                            </select>
                            </div>
                            <div class="textfield">
                                <label for="cidade">Cidade</label>
                                <select name="cidade" id="cidade">
                                    <option value="">Escolha...</option>
                                </select>
                            </div>
                        </div>
                </div>
                <div class="input-box">
                    <label for="perfil_img">Foto de perfil</label>
                    <div class="row">
                        <div class="col1 col-md-6">
                            <div id="foto_perfil">
                            <img src="<?=$imagem["path"]?>" alt="Foto de perfil de <?=$usuario["nome"]?>"/>
                            </div>
                        </div>
                        <div class="col2 col-md-6">
                        <label class="picture" for="perfil_img" tabIndex="0"><span class="perfil_img"></span></label>
                        <input type="file" accept="image/*" name="perfil_img" id="perfil_img" value=" <?php  $imagem["path"] ?>">
                        </div>
                    </div>
                    <p class="text-secondary text-center">Para manter a mesma foto de perfil não preencha o campo direito (quadrado).</p>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <input type="submit" value="Confirmar" id="btn_editar" onclick="return Erros()" class="btn btn-primary"/>
                </div>
            </form>
        </div>
        </div>
    </div>
    </div>
</div>
<div class="content">
    <h4>Meus pedidos</h4>
    <?php
    if (empty($lista_pedidos)) { 
        echo '<p class="text-secondary">Você ainda não fez nenhum pedido.</p>
        <img src="../assets/img/relaxado.png" alt="homem deitado relaxando" style="width:300px; padding:10px">';
    } else {
        echo '<div id="pedidos">';
        foreach ($lista_pedidos as $pedido) {
            $data = $pedido["data_entrega"];
            $hora = $pedido["horario"];
            ?>
            <div id="card_pedido">
                <img src="../assets/img/caixa.png" alt="ilustração de caixa" style="width:100px;"/>
                <h5><?php echo $pedido["descricao"]; ?></h5>
                <p class="text-secondary"><?php echo $pedido["categoria"]?></p>
                <p><span class="material-symbols-outlined">location_on</span> <?php echo $pedido["origem"]; ?></p>
                <p><span class="material-symbols-outlined">arrow_forward</span> <?php echo $pedido["destino"]; ?></p>
                <p><span class="material-symbols-outlined">calendar_month</span> <?php formataData($data); ?> às <?php formataHora($hora)?>h</p>
            </div>
            <?php
        }
        echo '</div>';
    }
?>
</div>
<?php include("../include/rodape.php");?>