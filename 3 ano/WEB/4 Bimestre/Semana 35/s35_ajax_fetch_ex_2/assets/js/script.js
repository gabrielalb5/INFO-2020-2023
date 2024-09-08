window.addEventListener("load", setEventos);

function setEventos() {
  let button = document.getElementById('btn_soma');
  button.addEventListener("click", calcularSoma);
}

function calcularSoma() {
  let nro1 = document.getElementById("id_nro1").value;
  let nro2 = document.getElementById("id_nro2").value;

  let dados_form = new FormData();
  dados_form.append("nro1", nro1);
  dados_form.append("nro2", nro2);

  fetch("../src/calculadora.php", {
    method: 'POST',
    body: dados_form,
  })
  .then(function(response) {
    return response.text();
  })
  .then(function(texto) {
    document.getElementById("id_msg").innerHTML = texto;
  })
  .catch(function(err) { 
    console.error(err);
  });
}