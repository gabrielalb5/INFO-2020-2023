Algoritmo "semnome"
//  
//  
// Descri��o   : Aqui voc� descreve o que o programa faz! (fun��o)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 14/04/2020
Var
// Se��o de Declara��es das vari�veis 
   n: inteiro //variavel de entrada
   i: inteiro //variavel de controle laco
   maior, menor: inteiro// variaveis auxiliares
   soma: inteiro //variavel de saida
   //intervalo de numeros de 1 ate 1000
Inicio
// Se��o de Comandos, procedimento, fun��es, operadores, etc... 
   maior <- -1
   menor <- 1001

   para i de 1 ate 5 faca
   leia (n)
   //atribuindo o maior n
   se (n> maior) entao
   maior <- n
   fimse
   //atribuindo o menor n
   se (n< menor) entao
   menor <- n
   fimse
   
   soma <- soma + n
   fimpara
   
   soma <- soma-maior-menor
   escreval (soma)
Fimalgoritmo