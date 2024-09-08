<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
</head>
<body>
    <form action="ex1.php" method="post">
        <?php
        for($i=1;$i<=5;$i++){
        echo '<label>Número '.$i.':</label>
        <input type="number" name="n'.$i.'" required><br><br>';
        }
        ?>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>