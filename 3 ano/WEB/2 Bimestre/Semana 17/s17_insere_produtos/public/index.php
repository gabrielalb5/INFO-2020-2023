<!DOCTYPE html>
<html lang="pt=BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exemplo - Inserção de produtos</title>
</head>
<body>
  <h3>Exibir produtos:</h3>
  <form action="../src/produto_lista.php">
    <button type="submit" value="listar">Listar Produtos</button>
  </form>
  <h3>Inserir produtos:</h3>
  <form action="../src/produto_insere.php" method="post">
    <label for="id_descricao"> 
      Descrição: 
      <input type="text" id="id_descricao" name="descricao_produto">
    </label> 
    <label for="id_valor"> 
      Valor: 
      <input type="number" id="id_valor" name="valor_produto">
    </label>             
    <button type="submit" value="inserir">Inserir</button>    
  </form>
</body>
</html>