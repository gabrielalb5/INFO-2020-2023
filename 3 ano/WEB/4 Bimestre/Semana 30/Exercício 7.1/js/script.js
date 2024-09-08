window.addEventListener("load", setEventos);

function setEventos(){
    let btn = document.getElementById("btn_sortear");
    btn.addEventListener("click", sorteio);
}

function sorteio(){
    let palpite = document.getElementById("palpite").value;
    let max = 6;
    let dado = Math.floor(Math.random() * max + 1);
    if(palpite == dado){
        alert("Parabéns, você acertou!\npalpite: " + palpite + " | sorteado: " + dado);
    }else{
        alert("Que pena, você errou :(\n palpite: " + palpite + " | sorteado: " + dado)
    }
}