<?php
require("../database/filme_bd.php");
require("../util/mensagens.php");
include("../include/cabecalho_user.php");
exibirmsg();
$lista_filmes = listarFilmesUser();
$dados = $_SESSION["dados_logado"];
?>  
<div style="display: flex;justify-content: center;flex-direction: column;align-items:center">
        <h4 class="mt-4 mb-4">Filmes</h4>
        <?php if(empty($lista_filmes)){ 
        echo "<p class='text-center'>Nenhum filme disponível.</p>
        <img src='../assets/img/Travolta.gif'/>";
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
                <th>Trailer</th>
                <th>Review</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach ($lista_filmes as $filme) :?>
                <?php $id_u = $dados["id_u"]; $id_f = $filme["id_f"];?>
            <tr>
                <td><img src="<?= $filme["Imagem"]?>" alt="<?= $filme["Titulo"]?>" style="width: 100px;"/></td>
                <td><?= $filme["Titulo"]?></td>
                <td><?= $filme["Lancamento"]?></td>
                <td><?= $filme["Categoria"]?></td>
                <td><a class="btn btn-info" href="<?= $filme["Trailer"]?>" target="blank_" ><span class="material-symbols-outlined">play_arrow</span></a></td>
                <td>
                    <?php $review = review($id_u,$id_f);
                    if($review == null){?>
                        <a class="btn btn-info" href="review_form.php?id_f=<?=$id_f?>"><span class="material-symbols-outlined">add</span></a>
                    <?php }else{
                        echo $review["Comentario"];
                    };?>
                </td>
            </tr>
                <?php endforeach ?>
            </tbody>
        </table>
<?php
include("../include/rodape.php");
?>