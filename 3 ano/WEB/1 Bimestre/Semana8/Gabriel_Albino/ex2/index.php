<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta author="Gabriel Albino">
    <title>Exercício 2</title>
</head>
<body>
    <h3>Exercício 2</h3>
    <p>Escreva um programa que solicite ao usuário a digitação de seis números entre 1 (um) e 60 (sessenta) e armazene esses números em um array. Após isso, o programa deve gerar, de forma aleatória, seis números entre 1 (um) e 60 (sessenta) e armazená-los em outro array. Por fim, os palpites do usuário e os números sorteados aleatoriamente devem ser exibidos. Além disso, a quantidade de acertos do usuário deve ser mostrada.</p>
    <form action="ex2.php" method="post">
        <label>Digite números entre 1 e 60</label></br></br>
        <?php
            for($i=0;$i<6;$i++){
                echo '<input type="number" name="n'.$i.'" min="1" max="60" required/> ';
            }
        ?>
        <input type="submit" value="Enviar"/>
    </form>
</body>
</html>