<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ajax Fetch - Exemplo 1</title>
  <script src="../assets/js/script.js"></script>
</head>
<body>
  <h3>API Fetch</h3>
  <p>Fornece uma interface JavaScript para a execução de requisições HTTP assíncronas por 
     meio de Promises (Promessas).</p>
  <p>Métodos:</p>
  <ul>
    <li>then - permite especificar o bloco que será executado após o cumprimento da Promise,
      retornando um objeto do tipo Response.</li>
    <li>catch - permite especificar o bloco que será executado em caso de rejeição Promise.</li>
  </ul>
  <p>Importante: A Promise retornada do fetch() será resolvida mesmo se a resposta seja um 
     status HTTP 404 ou 500. Ela será rejeitada somente se ocorrer uma falha na rede ou se 
     algo impedir que a requisição seja completada.</p>  
  <form>
    <button type="button" id="btn_fetch">Exemplo Ajax Fetch</button>
  </form>
  <div id="id_msg">
  </div>  
</body>
</html>