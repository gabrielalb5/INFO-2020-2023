<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ajax - Exemplo 2</title>
  <script src="../assets/js/script.js"></script>
</head>
<body>
  <h3>AJAX (Asynchronous JavaScript and XML)</h3>
  <p>AJAX não é uma linguagem de programação, mas uma técnica que possibilita a atualização das páginas
      web, de forma assíncrona, por meio da troca de pequenas quantidades de dados com o servidor web.</p>
  <p>Utilizando AJAX é possível atualizar partes de uma página web sem a necessidade de recarregar toda
      a página.</p>
  <p>Exemplos de aplicações que utilizam AJAX: Google Maps, Gmail, Youtube e Facebook.</p>  
  <form>
    <fieldset>
      <legend>Soma de números</legend>
      <label for="id_nro1">
        Número 1: 
        <input type="number" id="id_nro1" name="nro1">
      </label>
      <label for="id_nro2">
        Número 2: 
        <input type="number" id="id_nro2" name="nro2">
      </label>
      <button type="button" id="btn_soma">Calcular Soma</button>
    </fieldset>
  </form>
  <div id="id_msg">
  </div>  
</body>
</html>