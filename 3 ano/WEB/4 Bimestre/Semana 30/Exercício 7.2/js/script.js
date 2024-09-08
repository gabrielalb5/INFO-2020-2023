window.addEventListener("load", setEventos);

function setEventos(){
    let btn = document.getElementById("btn_media");
    btn.addEventListener("click", media);
}

function media(){
    let nome = document.getElementById("nome").value;
    let n1 = document.getElementById("n1").value;
    let n2 = document.getElementById("n2").value;
    let freq = document.getElementById("freq").value;
    let media = (parseFloat(n1) + parseFloat(n2))/2;

    if(freq>=75 & media<6){
        var situacao = "Reavaliação";
    }else if(media>=6){
        var situacao = "Aprovado";
    }else{
        var situacao = "Reprovado";
    }
    document.getElementById("relatorio").textContent = "Nome: " + nome + " | Média: " + media + " | Frequência: " + freq + " | Situação: " + situacao;
}