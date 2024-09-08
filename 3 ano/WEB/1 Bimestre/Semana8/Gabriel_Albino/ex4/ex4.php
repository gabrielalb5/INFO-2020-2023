<?php
    session_start();
    $nome = $_POST["nome"];
    $pv = $_POST["pv"];
    $ex = $_POST["ex"];
    $aluno = [$nome, $pv, $ex];
    
    if(!isset($_SESSION["alunos"])){
        $alunos = [];
        array_push($alunos,$aluno);
        $_SESSION["alunos"] = $alunos;
    }else{
        $alunos = $_SESSION["alunos"];
        array_push($alunos,$aluno);
        $_SESSION["alunos"] = $alunos;
    }
    //var_dump($alunos);
    header("Location:index.php");
?>