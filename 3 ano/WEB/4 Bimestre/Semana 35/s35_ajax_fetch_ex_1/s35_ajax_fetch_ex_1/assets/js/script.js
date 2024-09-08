window.addEventListener("load", setEventos);

function setEventos() {
  let button = document.getElementById("btn_fetch");
  button.addEventListener("click", exibirMsg);
}

function exibirMsg() {
  fetch("../src/cria_msg.php")
  .then(function(response) {
    return response.text();
  })
  .then(function(texto) {
    document.getElementById("id_msg").innerHTML = texto;
  })
  .catch(function(erro) { 
    console.error(erro);
  });
}