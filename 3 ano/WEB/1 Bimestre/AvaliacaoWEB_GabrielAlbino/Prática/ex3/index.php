<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="Gabriel Albino">
    <title>Exercício 3</title>
</head>
<body>
    <h3>Exercício 3</h3>
    <p>Digite números com valores de 1 a 60.</p>
    <form action="ex3.php" method="post">
    <?php
        for($i=1;$i<=6;$i++){
            echo "<label>Número {$i}: </label>";
            echo '<input type="number" name="n'.$i.'" min="1" max="60" required/><br><br>';
        }
    ?>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>