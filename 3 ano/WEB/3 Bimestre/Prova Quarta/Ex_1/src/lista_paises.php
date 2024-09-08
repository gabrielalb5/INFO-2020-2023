<?php
    if(!isset($_SESSION)){
        session_start();
    }
    include("../include/cabecalho.php");
    require("../database/pais_bd.php");
    require("../util/mensagens.php");
    exibirmsg();
    $lista_paises = ListarPaises();
?>
<center>
    <h3 class="m-4">Lista de Países</h3>
    <?php if(empty($lista_paises)){
        echo "<p class='text-center'>Nenhum país cadastrado.</p>";
        die();
    }
    ?>
</center>
    <table class="table table-hover">
        <thead>
            <tr>
                <td><span class="material-symbols-outlined">public</span></td>
                <td>Nome</td>
                <td>Região</td>
                <td>Capital</td>
                <td>Grupo da Copa</td>
                <td>Editar</td>
                <td>Remover</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($lista_paises as $pais): ?>
                <tr>
                    <td><?= $pais["id_p"]?></td>
                    <td><?= $pais["Nome"]?></td>
                    <td><?= $pais["Regiao"]?></td>
                    <td><?= $pais["Capital"]?></td>
                    <td><?= $pais["Grupo"]?></td>
                    <td>
                        <a class="btn btn-dark" href="form_pais_ed.php?id_p=<?=$pais["id_p"]?>"><span class="material-symbols-outlined">edit</span></a>
                    </td>
                    <td>
                        <form action="pais_remove.php" method="post">
                            <input type="hidden" name="id_p" value="<?=$pais["id_p"]?>"/>
                            <button type="submit" class="btn btn-danger" value="del"><span class="material-symbols-outlined">close</span></button>   
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php include("../include/rodape.php"); ?>