Algoritmo "semnome"
//  
//  
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 14/04/2020
Var
// Seção de Declarações das variáveis 
   n: inteiro //variavel de entrada
   i: inteiro //variavel de controle laco
   maior, menor: inteiro// variaveis auxiliares
   soma: inteiro //variavel de saida
   //intervalo de numeros de 1 ate 1000
Inicio
// Seção de Comandos, procedimento, funções, operadores, etc... 
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