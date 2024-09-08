window.addEventListener("load", setEventos);

function setEventos() {
  let button = document.getElementById('btn_soma');
  button.addEventListener("click", calcularSoma);
}

function calcularSoma() {
  let nro1 = document.getElementById("id_nro1").value;
  let nro2 = document.getElementById("id_nro2").value;

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
  xhttp.open("POST", "../src/calculadora.php");
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("nro1="+nro1+"&nro2="+nro2); 
}