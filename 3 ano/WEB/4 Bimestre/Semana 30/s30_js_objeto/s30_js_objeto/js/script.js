window.addEventListener("load", setEventos);

function setEventos() {
  let btn = document.getElementById("btn_exibir_msg");
  btn.addEventListener("click", exibirMsg);

  btn = document.getElementById("btn_exibir_alert");
  btn.addEventListener("click", exibirAlert);
}

function exibirMsg() {
  let livro = new Object();
  livro.titulo = "Use a Cabeça! HTML com CSS e XHTML";
  livro.autor = "Eric Freeman, Elisabeth Freeman";
  livro.preco = 109.90;
  livro.capitulo1 = "A linguagem da Web";
  livro.capitulo2 = "Conheça o 'HT' do HTML";
  livro.capitulo3 = "Construção de páginas Web: construção de blocos";
  
  let livro2 = {
    "titulo": "Use a Cabeça! HTML com CSS e XHTML",
    "autor": "Eric Freeman, Elisabeth Freeman",
    "preco": 109.90,
    "capitulo1": "A linguagem da Web",
    "capitulo2": "Conheça o 'HT' do HTML",
    "capitulo3": "Construção de páginas Web: construção de blocos"
  };

  let resultado = "\r\n Livro 1: \r\n";
  for (let propriedade in livro){
      resultado += propriedade + ": " + livro[propriedade] + "\r\n";
  }
  resultado += "\r\n Livro 2: \r\n";
  for (let propriedade in livro2){
    resultado += propriedade + ": " + livro2[propriedade] + "\r\n";
  }

  document.getElementById("id_resultado").textContent = resultado;
}

function exibirAlert(){
  let livro = new Object();
  livro.titulo = "Use a Cabeça! HTML com CSS e XHTML";
  livro.autor = "Eric Freeman, Elisabeth Freeman";
  livro.preco = 109.90;
  livro.capitulos = new Object();
    livro.capitulos.capitulo1 = "A linguagem da Web";
    livro.capitulos.capitulo2 = "Conheça o 'HT' do HTML";
    livro.capitulos.capitulo3 = "Construção de páginas Web: construção de blocos";

  let resultado = "";
  for (let propriedade in livro){
    if (typeof livro[propriedade] == "object"){
      for (let objaninhado in livro[propriedade]){
        resultado += objaninhado + ": " + livro[propriedade][objaninhado] + "\n";
      }
    }else{
      resultado += propriedade + ": " + livro[propriedade] + "\n";    
    };
  }
  alert(resultado);
}