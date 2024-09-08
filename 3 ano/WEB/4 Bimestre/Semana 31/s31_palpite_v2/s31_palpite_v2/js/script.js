window.addEventListener("load", setEventos);

function setEventos() {
  let form = document.getElementById('id_form');
  form.addEventListener("submit", verificarPalpite);
}

function verificarPalpite() {
  event.preventDefault();
  let usuario = document.getElementById("id_usuario").value;
  let palpite = document.getElementById("id_palpite").value;

  let nro = gerarNroAleatorio(6);

  if (palpite == nro) {
    document.getElementById("id_p").textContent = "Número sorteado: " + nro
                                                  + " - " + usuario + " acertou!";
  } else {
    document.getElementById("id_p").textContent = "Número sorteado: " + nro 
                                                  + " - " + usuario + " errou!";    
  }
}

function gerarNroAleatorio(maximo) {
  return Math.floor(Math.random() * maximo + 1);
}