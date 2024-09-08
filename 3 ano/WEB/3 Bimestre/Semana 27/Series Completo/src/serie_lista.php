<?php
require("../database/serie_bd.php");
require("../util/formatacoes.php");
include("../include/cabecalho.php");
$lista_series = ListarSeries();
?>  
    <center>
        <h3 class="mt-4 mb-4">Séries</h3>
        <?php if(empty($lista_series)){ 
        echo "<p class='text-center'>Nenhuma série cadastrada.</p>"; 
        die();
        }
    ?>
    </center>
        <table class="table table-hover">
            <thead>
            <tr>
                <th><span class="material-symbols-outlined">movie_filter</span></th>
                <th>Nome</th>
                <th>Temporadas</th>
                <th>Categoria</th>
                <th>Lançamento</th>
                <th>Finalizada</th>
                <th>Editar</th>
                <th>Remover</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach ($lista_series as $serie) :?>
            <tr>
                <td><?= $serie["id_s"]?></td>
                <td><?= $serie["Nome"]?></td>
                <td><?= $serie["Temporadas"]?></td>
                <td><?= $serie["Categoria"]?></td>
                <td><?= dataformatada($serie["Lancamento"])?></td>
                <?php $finalizada = $serie["Finalizada"] ? "checked='checked'" : "";?>
                <td><input type="checkbox" class="form-check-input" name="cb_finalizada" <?=$finalizada?> disabled></td> 
                <td>
                    <a class="btn btn-dark" href="serie_form_ed.php?id_s=<?= $serie["id_s"]?>"><span class="material-symbols-outlined">edit</span></button>
                </td>
                <td>
                    <form action="serie_remove.php" method="post">
                        <input type="hidden" name="id_s" value="<?=$serie["id_s"]?>">
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