<?php
        session_start();
        $nome = $_SESSION["nome"];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Reavaliação</title>
</head>
<body>
    <h3>Reavaliação</h3>
    <form action="final.php" method="post"> 
        <label>Nota da reavaliação:<label>
        <input type="number" name="rv" min="0" max="10" required>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>