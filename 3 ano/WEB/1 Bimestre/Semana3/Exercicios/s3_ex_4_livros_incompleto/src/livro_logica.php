<?php
    session_start();
    
    function inserirLivro($titulo, $autor, $ano, $editora){
        $novo_livro = ["titulo" => $titulo, "autor" => $autor, "ano" => $ano, "editora" => $editora];
        //$outro_livro = [$titulo,$autor,$ano,$editora];
        //var_dump($novo_livro);
        //die();

        if(isset($_SESSION["livros"])){
            $lista_livros = $_SESSION["livros"];
        }else{
            $lista_livros = [];
        }
        array_push($lista_livros, $novo_livro);
        $_SESSION["livros"] = $lista_livros;
    }

    function imprimirLivros(){
        if(isset($_SESSION["livros"])){
            $livros = $_SESSION["livros"];
            foreach ($livros as $livro){
                echo '<tr>
                <td>'.$livro["titulo"].'</td>
                <td>'.$livro["autor"].'</td>
                <td>'.$livro["ano"].'</td>
                <td>'.$livro["editora"].'</td></tr>';
            }
        }else{
            echo '<tr><td colspan="4">Não existem livros cadastrados!</td></tr>';
        }
    }
?>