<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
</head>
<body>
    <form action="ex3.php" method="post">
        <?php
        for($i=1;$i<=5;$i++){
            echo '<label>Nome:</label>
            <input type="text" name="nome[]" required>';
            for($j=1;$j<=3;$j++){
            echo '<label>Nota '.$j.':</label>
            <input type="number" name="n'.$j.'[]" required>';
            }
            echo '<br>';
        }
        ?>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>