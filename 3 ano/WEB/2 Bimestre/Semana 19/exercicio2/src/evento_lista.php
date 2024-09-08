<?php
    require("../database/evento_bd.php");
    include("../include/cabecalho.php");
    $lista_eventos = ListarEventos();
?>  
    <center>
    <h3 class="mt-5 mb-5">Eventos</h3>
    </center>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th><span class="material-symbols-outlined">event_note</span></th>
                    <th>Tipo</th>
                    <th>Descrição</th>
                    <th>Organizador</th>
                    <th>Participante</th>
                    <th>Remover</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($lista_eventos as $evento): ?>
                <tr>
                    <td><?= $evento["id_e"]?></td>
                    <td><?= $evento["Nome"]?></td>
                    <td><?= $evento["Descricao"]?></td>
                    <td><?= $evento["Organizador"]?></td>
                    <td><?= $evento["Participante"]?></td>
                    <td>
                        <form action="evento_remove.php" method="post">
                            <input type="hidden" name="id_e" value="<?=$evento['id_e']?>">
                            <button type="submit" class="btn btn-danger" value="del"><span class="material-symbols-outlined">close</span></button>
                        </form>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
<?php include("../include/rodape.php"); ?>