<?php
require("../database/filme_bd.php");
require("../util/mensagens.php");
include("../include/cabecalho_admin.php");
$lista_filmes = listarFilmesAdmin();
exibirmsg();
?>  
<div style="display: flex;justify-content: center;flex-direction: column;align-items:center">
        <h4 class="mt-4 mb-4">Filmes</h4>
        <?php if(empty($lista_filmes)){ 
        echo "<p class='text-center'>Nenhum filme cadastrado.</p>"; 
        die();
        }
    ?>
        <table class="table table-dark table-hover w-75">
            <thead>
            <tr>
                <th><span class="material-symbols-outlined">movie_filter</span></th>
                <th>Título</th>
                <th>Lançamento</th>
                <th>Categoria</th>
                <th>Disponível</th>
                <th>Trailer</th>
                <th>Editar</th>
                <th>Remover</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach ($lista_filmes as $filme) :?>
            <tr>
                <td><img src="<?= $filme["Imagem"]?>" alt="<?= $filme["Titulo"]?>" style="width: 100px;"/></td>
                <td><?= $filme["Titulo"]?></td>
                <td><?= $filme["Lancamento"]?></td>
                <td><?= $filme["Categoria"]?></td>
                <?php $disponivel = $filme["Disponivel"] ? "checked='checked'" : "";?>
                <td><input type="checkbox" class="form-check-input" name="cb_disponivel" <?=$disponivel?> disabled></td> 
                <td><a class="btn btn-info" href="<?= $filme["Trailer"]?>" target="_blank"><span class="material-symbols-outlined">play_arrow</span></a></td>
                <td>
                    <a class="btn btn-warning" href="filme_form_ed.php?id_s=<?= $filme["id_f"]?>"><span class="material-symbols-outlined">edit</span></button>
                </td>
                <td>
                    <form action="filme_remove.php" method="post">
                        <input type="hidden" name="id_f" value="<?=$filme["id_f"]?>">
                        <button type="submit" class="btn btn-danger" value="del"><span class="material-symbols-outlined">close</span></button>
                    </form>
                </td>
            </tr>
                <?php endforeach ?>
            </tbody>
        </table>
</div>
<?php
include("../include/rodape.php");
?>