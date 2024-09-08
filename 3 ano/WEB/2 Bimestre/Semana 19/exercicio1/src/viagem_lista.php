<?php
    require("../database/viagem_bd.php");
    include("../include/cabecalho.php");
    $lista_viagens = ListarViagens();
?>  
    <center>
    <h3 class="mt-5 mb-5">Viagens</h3>
    </center>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th><span class="material-symbols-outlined">language</span></th>
                    <th>Origem</th>
                    <th>Destino</th>
                    <th>Período</th>
                    <th>Valor</th>
                    <th>Qtd de pessoas</th>
                    <th>Acomodação</th>
                    <th>Café</th>
                    <th>Traslado</th>
                    <th>Remover</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($lista_viagens as $viagem): ?>
                <?php 
                    if($viagem["Cafe"]==1){$viagem["Cafe"]="Sim";}else{$viagem["Cafe"]="Não";};
                    if($viagem["Traslado"]==1){$viagem["Traslado"]="Sim";}else{$viagem["Traslado"]="Não";};
                ?>
                <tr>
                    <td><?= $viagem["id_v"]?></td>
                    <td><?= $viagem["Origem"]?></td>
                    <td><?= $viagem["Destino"]?></td>
                    <td><?= $viagem["Periodo"]?></td>
                    <td>R$ <?= $viagem["Valor"]?></td>
                    <td><?= $viagem["Quantidade"]?></td>
                    <td><?= $viagem["Tipo"]?></td>
                    <td><?= $viagem["Cafe"]?></td>
                    <td><?= $viagem["Traslado"]?></td>
                    <td>
                        <form action="viagem_remove.php" method="post">
                            <input type="hidden" name="id_v" value="<?=$viagem['id_v']?>">
                            <button type="submit" class="btn btn-danger" value="del"><span class="material-symbols-outlined">close</span></button>
                        </form>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
<?php include("../include/rodape.php"); ?>