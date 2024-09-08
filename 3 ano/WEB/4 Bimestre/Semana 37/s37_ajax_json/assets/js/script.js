window.addEventListener("load", setEventos);

function setEventos() {
  let button = document.getElementById('btn_ajax');
  button.addEventListener("click", exibirDadosArray);
}

function exibirDadosArray() {
  const xhttp = new XMLHttpRequest();

  xhttp.onreadystatechange = function() {
    if(this.readyState == 4 && this.status == 200) {
      let resposta = JSON.parse(this.responseText);
      let saida = "Estudantes: " + resposta[0] + ", " + resposta[1] + ", " + resposta[2];
      document.getElementById("id_msg").innerHTML = saida;
    }
  }

  xhttp.open("GET", "../src/cria_array.php");
  xhttp.send();
}