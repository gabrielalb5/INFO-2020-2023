function somar() {
  let nro1 = document.getElementById("id_nro1");
  let nro2 = document.getElementById("id_nro2");

  let resultado = parseInt(nro1.value) + parseInt(nro2.value);

  document.getElementById("id_resultado").textContent = "Resultado: " + resultado;
}