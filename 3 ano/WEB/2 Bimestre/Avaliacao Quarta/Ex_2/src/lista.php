<?php
    require("../database/participante_bd.php");
    include("../include/cabecalho.php");
    $listaParticipantes = ListarParticipantes();
?>
    <center><h3 class="mt-5">Lista de Participantes</h3></center>
        <table class="table table-hover">
            <thead>
                <th><span class="material-symbols-outlined">badge</span></th>
                <th>Nome</th>
                <th>Empresa</th>
                <th>Função</th>
                <th>Diária</th>
                <th>Remover</th>
            </thead>
            <tbody>
                <?php foreach($listaParticipantes as $participante): ?>
                    <tr>
                        <td><?= $participante["id_participante"] ?></td>
                        <td><?= $participante["nome"] ?></td>
                        <td><?= $participante["empresa"] ?></td>
                        <td><?= $participante["funcao"] ?></td>
                        <td><?= $participante["diaria"] ?></td>
                        <td>
                            <form action="remover.php" method="post">
                                <input type="hidden" name="id_participante" value="<?=$participante["id_participante"]?>"/>
                                <button type="submit" class="btn btn-danger" value="del"><span class="material-symbols-outlined">close</span></button>
                            </form>
                        </td>
                    <tr>
                <?php endforeach; ?>
            </tbody>
        </table>
<?php include("../include/rodape.php"); ?>