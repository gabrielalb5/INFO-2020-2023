window.addEventListener("load", setEventos);

function setEventos() {
  let button = document.getElementById('btn_ajax');
  button.addEventListener("click", exibirMsg);
}

function exibirMsg() {
  // Cria um objeto XMLHttpRequest
  const xhttp = new XMLHttpRequest();

  // Especifica a função de callback (chamada de retorno)
  xhttp.onreadystatechange = function() {
    if(this.readyState == 4 && this.status == 200) {
      let resposta = this.responseText;
      document.getElementById("id_msg").innerHTML = resposta;
    }
  }

  // Envio da requisição
  xhttp.open("GET", "../src/cria_msg.php");
  xhttp.send();
}

/*
1) A propriedade onreadystatechange é “ativada” quando o estado da requisição é alterado.

2) Estados de uma requisição (XMLHttpRequest):
0: request not initialized (Requisição não iniciada).
1: server connection established (Conexão com o servidor estabelecida).
2: request received (Requisição recebida).
3: processing request (Requisição em processamento).
4: request finished and response is ready (Requisição finalizada e resposta pronta).

3) Mensagens de status HTTP
200: Ok.
404: "Not Found" (O recurso não foi encontrado). 
*/