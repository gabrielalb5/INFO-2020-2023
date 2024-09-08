<?php include("../include/cabecalho_motorista.php");
buscarUsuario();
buscarCNH();
buscarImagem();
buscarImagemCNH();
$lista_tv = listarTipoVeiculo();
$lista_veiculos = listarVeiculos();
$usuario = $_SESSION["usuario"];
$cnh = $_SESSION["cnh"];
$imagem = $_SESSION["imagem"];
$imagem_cnh = $_SESSION["imagem_cnh"];
$contador_v = $_SESSION["veiculo_cont"];
$i = 1;
?>
<div class="container">
    <div class="cabecalho">
        <div class="row">
            <div class="col">
            <div id="foto_perfil">
            <img src="<?=$imagem["path"]?>" alt="Foto de perfil de <?=$usuario["nome"]?>"/>
            </div>
            </div>
            <div class="col-md-auto">
            <h2><?php echo $usuario["nome"] . ' ' . $usuario["sobrenome"];?></h2>
            <p><span class="material-symbols-outlined">location_on</span> <?php echo $usuario["cidade"] . ' - ' . $usuario["uf"];?><p>
            <p><span class="material-symbols-outlined">call</span> <?php echo $usuario["telefone"]?><p>
            <p><span class="material-symbols-outlined">magic_button</span> Avaliação: 0.0</p>
            </div>
            <div class="col-md-auto">
            <h4>Veículos</h4>
            <?php
                if($contador_v==0){ 
                    echo '<p class="text-secondary">Não há veículos cadastrados</p>
                    <img src="../assets/img/veiculo.png" alt="imagem de veículo" style="width:150px; padding:10px"><br>
                    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#veiculo_add"><span class="material-symbols-outlined">add</span> Adicionar</button>';
                }else{
                    echo '<p class="text-secondary">Cadastrados: ' .$contador_v.' de 3</p><ul>';
                    foreach ($lista_veiculos as $veiculo){
                        echo '<li>'.$veiculo["tipo"].' - '.$veiculo["placa"].'</li>';
                    }
                    echo '</ul>';
                    if($contador_v<3){
                        echo '<button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#veiculo_add"><span class="material-symbols-outlined">add</span> Adicionar</button>
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#veiculo_edit"><span class="material-symbols-outlined">stylus_note</span> Editar</button>';
                    }else{
                        echo '<button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#veiculo_edit"><span class="material-symbols-outlined">stylus_note</span> Editar</button>';
                    }
                }
            ?>
            </div>
            <div class="col col-sm-auto">
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
    <!--Modal de veículos-->
        <!--Adicionar-->
        <div class="modal fade" id="veiculo_add" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Adicionar veículo</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="cadastro_veiculo.php" method="post">
                    <div class="textfield">
                        <label for="tipo">Tipo</label>
                        <select name="tipo" id="tipo" required>
                            <option value="">Escolha...</option>
                            <?php foreach ($lista_tv as $tipo) : ?>
                                <option value='<?=$tipo["id_tv"]?>'>
                                <?=$tipo["nome"]?>
                                </option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div id="colunas">
                    <div id="col1">
                        <div class="textfield">
                            <label for="renavam">Renavam</label>
                            <input type="text" pattern="[0-9]*" title="Apenas números são permitidos" placeholder="Digite o Código" id="renavam" name="renavam" min="0" maxlength="11" required>
                        </div>
                        <div class="textfield">
                            <label for="marca">Marca</label>
                            <input type="text" placeholder="Marca" id="marca" name="marca" maxlength="10" required>
                        </div>
                        <div class="textfield">
                            <label for="modelo">Modelo</label>
                            <input type="text" placeholder="Modelo" id="modelo" name="modelo" maxlength="20" required>
                        </div>
                    </div>
                    <div id="col2">
                        <div class="textfield">
                            <label for="placa">Placa</label>
                            <input type="text" placeholder="Placa" id="placa" name="placa" maxlength="8" required>
                        </div>
                        <div class="textfield">
                            <label for="ano">Ano</label>
                            <input type="number" placeholder="Ano de fabricação" id="ano" name="ano" min="1800" max="9999" required>
                        </div>
                        <div class="textfield">
                            <label for="cor">Cor</label>
                            <input type="text" placeholder="Cor" id="cor" name="cor" maxlength="15" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <input type="submit" value="Confirmar" id="btn_editar" class="btn btn-primary"/>
            </div>
            </form>
            </div>
        </div>
        </div>
        <!--Editar-->
        <div class="modal fade" id="veiculo_edit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Editar veículos</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <?php foreach($lista_veiculos as $veiculo):?>
                <div class="titulo_veiculo">
                <h4>Veículo <?php echo $i?></h4>
                <form action="excluir_veiculo.php" method="post">
                        <input type="hidden" name="renavam" value="<?=$veiculo["renavam"]?>"required>
                        <button type="submit" class="btn btn-danger" value="del"><span class="material-symbols-outlined">delete</span></button>
                </form>
                </div>
                <form action="editar_veiculo.php" method="post">
                    <div class="textfield">
                        <label for="tipo">Tipo</label>
                        <select name="tipo" required>
                        <option value="">Escolha...</option>
                        <?php foreach ($lista_tv as $tipo) : 
                            $selecionado = $veiculo["id_tv"] == $tipo["id_tv"];
                            $atributoSelected = $selecionado ? "selected='selected'": "";
                            ?>
                            <option value='<?=$tipo["id_tv"]?>' <?=$atributoSelected?>>
                            <?=$tipo["nome"]?>
                            </option>
                        <?php endforeach ?>
                        </select>
                    </div>
                    <div id="colunas">
                    <div id="col1">
                    <span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Disabled popover">
                        <div class="textfield">
                            <label for="renavam">Renavam</label>
                            <input value="<?php echo $veiculo["renavam"]?>" type="text" pattern="[0-9]*" title="Apenas números são permitidos" placeholder="Digite o Código" id="renavam" name="renavam" min="0" maxlength="11" style="cursor:not-allowed;" disabled required>
                            <input type="hidden" name="renavam" value="<?php echo $veiculo["renavam"]?>">
                        </div>
                    </span>
                        <div class="textfield">
                            <label for="marca">Marca</label>
                            <input value="<?php echo $veiculo["marca"]?>" type="text" placeholder="Marca" id="marca" name="marca" maxlength="10" required>
                        </div>
                        <div class="textfield">
                            <label for="modelo">Modelo</label>
                            <input value="<?php echo $veiculo["modelo"]?>" type="text" placeholder="Modelo" id="modelo" name="modelo" maxlength="20" required>
                        </div>
                    </div>
                    <div id="col2">
                        <div class="textfield">
                            <label for="placa">Placa</label>
                            <input value="<?php echo $veiculo["placa"]?>" type="text" placeholder="Placa" id="placa" name="placa" maxlength="8" style="cursor:not-allowed;" disabled required>
                            <input type="hidden" name="placa" value="<?php echo $veiculo["placa"]?>">
                        </div>
                        <div class="textfield">
                            <label for="ano">Ano</label>
                            <input value="<?php echo $veiculo["ano"]?>" type="number" placeholder="Ano de fabricação" id="ano" name="ano" min="1800" max="9999" required>
                        </div>
                        <div class="textfield">
                            <label for="cor">Cor</label>
                            <input value="<?php echo $veiculo["cor"]?>" type="text" placeholder="Cor" id="cor" name="cor" maxlength="15" required>
                        </div>
                    </div>
                </div>
                <p class="text-secondary text-center">"Renavam" e "Placa" não podem ser alterados por questões de segurança.</p>
                <input type="submit" value="Editar" class="btn btn-secondary" id="botao_largo"/><br>
                </form><br>
            <?php $i++; endforeach?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
            </div>
            </form>
            </div>
        </div>
        </div>
    <!--Modal de edição de perfil-->
    <div class="modal fade" id="editar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="editarLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="editarLabel">Editar perfil</h1>
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
                <div class="textfield">
                    <label for="numero_cnh">CNH</label>
                    <input type="text" placeholder="XXX.XXX.XXX-XX" id="numero_cnh" name="numero_cnh" maxlength="14" minlength="14" value="<?php echo $cnh["numero"] ?>" style="cursor:not-allowed;" disabled required>
                    <p class="text-secondary text-center">A CNH não pode ser alterada por questões de segurança.</p>
                </div>
                <div class="textfield">
                    <label for="validade_cnh">Validade da CNH</label>
                    <input type="date" id="validade_cnh" name="validade_cnh" max="9999-12-31" value="<?php echo $cnh["validade"] ?>" required></br>
                </div>
                <div class="input-box">
                    <label for="cnh_img">Foto da CNH</label>
                    <div id="foto_cnh">
                        <img src="<?=$imagem_cnh["path"]?>" alt="Foto da CNH">
                    </div>
                    <label class="picture" id="cnh_preview" for="cnh_img" tabIndex="0"><span class="cnh_img"></span></label>
                    <input type="file" accept="image/*" name="cnh_img" id="cnh_img">
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
<?php include("../include/rodape.php");?>