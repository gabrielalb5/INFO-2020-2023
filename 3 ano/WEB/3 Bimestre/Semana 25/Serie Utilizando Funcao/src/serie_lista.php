<?php
require("../database/serie_bd.php");
include("../include/cabecalho.php");
$lista_series = ListarSeries();
?>  
    <center>
        <h3 class="mt-5 mb-5">Séries</h3>
    </center>
        <table class="table table-hover">
            <thead>
            <tr>
                <th><span class="material-symbols-outlined">movie_filter</span></th>
                <th>Nome</th>
                <th>Ano de Lançamento</th>
                <th>Temporadas</th>
                <th>Categoria</th>
                <th>Remover</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach ($lista_series as $serie) :?>
            <tr>
                <td><?= $serie["id_s"]?></td>
                <td><?= $serie["Nome"]?></td>
                <td><?= $serie["Lancamento"]?></td>
                <td><?= $serie["Temporadas"]?></td>
                <td><?= $serie["Categoria"]?></td>
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