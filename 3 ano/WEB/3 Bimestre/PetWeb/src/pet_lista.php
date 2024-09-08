<?php
require("../database/pet_bd.php");
require("../util/formatacoes.php");
include("../util/mensagens.php");
include("../include/cabecalho.php");
exibirmsg();
$lista_pets = listarpets();
?>  
    <center>
        <h3 class="mt-5 mb-3">Animais para adoção</h3>
    </center>
    <?php if(empty($lista_pets)){ 
        echo "<p class='text-center'>Nenhum pet cadastrado.</p>"; 
        die();
        }
    ?>
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Espécie</th>
                <th>Raça</th>
                <th>Data de Nascimento</th>
                <th>Comentário</th>
                <th>Adotado</th>
                <th>Editar</th>
                <th>Remover</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach ($lista_pets as $pet) :?>
            <tr>
                <td><?= $pet["Nome"]?></td>
                <td><?= $pet["Tipo"]?></td>
                <td><?= $pet["Raca"]?></td>
                <td><?= dataformatada($pet["Nascimento"])?></td>
                <td><?= $pet["Comentario"]?></td>
                <?php $adotado = $pet["Adotado"] ? "checked='checked'" : "";?>
                <td><input type="checkbox" class="form-check-input" name="cb_adotado" <?=$adotado?> disabled></td>    
                <td>
                    <a class="btn btn-dark" href="pet_form_ed.php?id_p=<?= $pet["id_p"]?>"><span class="material-symbols-outlined">edit</span></button>
                </td>
                <td>
                    <form action="pet_remove.php" method="post">
                        <input type="hidden" name="id_p" value="<?=$pet["id_p"]?>">
                        <button type="submit" class="btn btn-danger" value="del"><span class="material-symbols-outlined">close</span></button>
                    </form>
                </td>
            </tr>
                <?php endforeach ?>
            </tbody>
        </table>
<?php
include("../include/rodape.php");
?>