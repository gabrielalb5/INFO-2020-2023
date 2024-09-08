<?php
$lista_historico = historico();
?>
<br>
<?php
if (empty($lista_historico)) {
    echo '<h5>Histórico</h5><p class="text-secondary">Você não possui entregas finalizados</p>';
} else {
    ?>
    <table class="table table-hover w-75">
        <thead class="bg-dark text-white">
            <tr class="text-center">
                <th colspan="5">Histórico</th>
            </tr>
            <tr class="text-center bg-light text-dark">
                <th>Data e horário</th>
                <th>Descrição</th>
                <th>Cliente</th>
                <th>Valor</th>
                <th>Detalhar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($lista_historico as $pedido) {
                $data = formataData($pedido['data_entrega']);
                $hora = formataHora($pedido['horario']);
                echo "<tr class='text-center'>";
                echo "<td>" .$data.' às '.$hora.'h'. "</td>";
                echo "<td>" . $pedido['descricao'] . "</td>";
                echo "<td>" . $pedido['cliente'] . "</td>";
                echo "<td>R$ " . $pedido['valor'] . "</td>";?>
                <td><button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#modalhistorico<?php echo $pedido["id_pedido"]?>_confirmado"><span class="material-symbols-outlined">expand_more</span></td>
        <?php   echo "</tr>";?>
            <!--modal de cada entrega/pedido do histórico-->
                <div class="modal fade" id="modalhistorico<?php echo $pedido["id_pedido"]?>_confirmado" tabindex="-1" aria-labelledby="modalpedidoLabel" data-bs-backdrop="static" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="modalhistoricoLabel">Detalhes</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h5>Pedido #<?php echo $pedido["id_pedido"];?></h5>
                            <p><span class="material-symbols-outlined">package_2</span> <?php echo $pedido["descricao"]; ?></p>
                            <p><span class="material-symbols-outlined">person</span> <?php echo $pedido["cliente"]; ?> <span class="material-symbols-outlined">calendar_month</span> <?php echo $data; ?> às <?php echo $hora; ?>h</p>
                            <p><span class="material-symbols-outlined">location_on</span> Retirada: <?php echo $pedido["origem"]; ?></p>
                            <p><span class="material-symbols-outlined">where_to_vote</span> Entrega: <?php echo $pedido["destino"]; ?></p>
                            <p><span class="material-symbols-outlined">payments</span> R$ <?php echo $pedido["valor"];?> <span class="material-symbols-outlined">person_apron</span> Ajudante: <?php echo $pedido["ajudante"]; ?></p>
                            <p><span class="material-symbols-outlined">directions_car</span> <?php echo $pedido["veiculo"]?></p>
                            <p>Finalizado em <?php echo arrayDataHora($pedido["finalizado"]);?></p>
                            <p>Essa entrega recebeu a avaliação <?php echo $pedido["avaliacao"];?><span class="material-symbols-outlined">magic_button</span></p>
                        </div>
                        <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        </div>
                    </div>
                </div>
            <?php
            };
            ?>
        </tbody>
    </table>
<?php
};
?>
