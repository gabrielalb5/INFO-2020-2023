<?php
if(!isset($_SESSION)){
    session_start();
}
require("../database/serie_bd.php");
require("../util/formatacoes.php");
require("../util/mensagens.php");
include("../include/cabecalho.php");
exibirmsg();
$lista_series = ListarSeries();
?>
<center>
    <h3 class="m-4">Lista de Séries</h3>
    <?php if(empty($lista_series)){
        echo "<p class='text-center'>Nenhuma série cadastrada.</p>";
        die();
    }
    ?>
</center>
<table class="table table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Descição</th>
            <th>Temporadas</th>
            <th>Lançamento</th>
            <th>Finalizada</th>
            <th>Editar</th>
            <th>Remover</th>
        </tr>
        <tbody>
            <?php foreach($lista_series as $serie): ?>
                <tr>
                    <td><?= $serie["id_s"] ?></td>
                    <td><?= $serie["Nome"] ?></td>
                    <td><?= $serie["Descricao"] ?></td>
                    <td><?= $serie["Temporada"] ?></td>
                    <td><?= formatadata($serie["Lancamento"]) ?></td>
                    <?php $finalizada = $serie["Finalizada"] ? "checked='checked'":"";?>
                    <td><input type="checkbox" class="form-check-input" name="cb_finalizada" <?= $finalizada?> disabled/></td>
                    <td>
                        <a class="btn btn-dark" href="serie_form_ed.php?id_s=<?= $serie["id_s"]?>">Editar</a>
                    </td>
                    <td>
                        <form action="serie_remove.php" method="post">
                            <input type="hidden" name="id_s" value="<?= $serie["id_s"]?>">
                            <button type="submit" class="btn btn-danger" value="del">X</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </thead>
</table>
<?php include("../include/rodape.php"); ?>