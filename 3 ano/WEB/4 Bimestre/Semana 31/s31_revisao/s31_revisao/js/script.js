/*
  Uma caixa de mensagem é exibida, mas irá interromper a 
  execução do programa até que o usuário clique em "Ok".
*/
function exibirMsgBoasVindas(usuario) {
  alert("Bem Vindo " + usuario);
}

/*
  Se você utilizar o console para imprimir o resultado, a função
  será dependente desse método.
*/
function somarNros(nro1, nro2){
  var resultado = nro1 + nro2;
  console.log(resultado);
}

/*
  Utilizar o return permite retornar o resultado da operação
  para quem estiver invocando a função 
*/
function calcularMediaAritmetica(nro1, nro2){
  return (nro1 + nro2) / 2;
}

/*
  Os trechos a seguir exemplificam o funcionamento das funções
  declaradas. Contudo, não utilizaremos nossas "chamadas" de função
  assim, mas a partir de eventos na página web.
*/
exibirMsgBoasVindas("Edilson");

let valor1 = 5;
let valor2 = 8;

somarNros(valor1, valor2);

let media = calcularMediaAritmetica(valor1, valor2);
console.log("Média: " + media);