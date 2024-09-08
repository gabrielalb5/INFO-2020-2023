window.addEventListener("load", setEventos);

function setEventos(){
    let btn = document.getElementById("btnMultiplicar");
    btn.addEventListener("click", multiplicar);
}

function multiplicar(){
    let n1 = document.getElementById("n1");
    let n2 = document.getElementById("n2");

    let resultado = parseInt(n1.value) * parseInt(n2.value);
    
    alert("Resultado: " + resultado);
}