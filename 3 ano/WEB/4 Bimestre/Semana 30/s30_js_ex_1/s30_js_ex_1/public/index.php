<!--
  Após validação utilizando JavaScript, o formulário é submetido para processamento 
  por meio do PHP.
-->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Semana 30 - Exemplo 1</title>
  <script src="../assets/js/script.js"></script>  
</head>
<body>
  <form action="../src/processa_form.php" method="post" onsubmit="return clicarSubmit();">
    <fieldset>
      <legend>Envio para PHP</legend>
      <label for="txt_usuario">
        Usuário: 
        <input type="text" id="txt_usuario" name="usuario">
      </label>
      <label for="psw_senha">
        Senha: 
        <input type="password" id="psw_senha" name="senha">
      </label>
      <input type="submit" value="Enviar">
    </fieldset>
  </form>
  <p id="id_p"></p>
</body>
</html>