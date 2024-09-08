<?php
    require("../database/mesario_bd.php");
    include("../include/cabecalho.php");
    $listaMesarios = ListarMesarios();
?>
    <center><h3 class="mt-5">Lista de Mesários</h3></center>
        <table class="table table-hover">
            <thead>
                <th><span class="material-symbols-outlined">badge</span></th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Número de Inscrição</th>
                <th>Zona</th>
                <th>Seção</th>
            </thead>
            <tbody>
                <?php foreach($listaMesarios as $mesario): ?>
                    <tr>
                        <td><?= $mesario["id_fiscal"] ?></td>
                        <td><?= $mesario["nome"] ?></td>
                        <td><?= $mesario["fone"] ?></td>
                        <td><?= $mesario["nro_inscricao"] ?></td>
                        <td><?= $mesario["zona"] ?></td>
                        <td><?= $mesario["secao"] ?></td>
                    <tr>
                <?php endforeach; ?>
            </tbody>
        </table>
<?php include("../include/rodape.php"); ?>