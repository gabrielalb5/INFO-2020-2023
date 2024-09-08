Algoritmo "semnome"
//  
//  
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 14/04/2020
Var
// Seção de Declarações das variáveis 
   i, j, n, somaDiv: inteiro

Inicio
// Seção de Comandos, procedimento, funções, operadores, etc... 
   para i <- 1 ate 10 faca
   leia (n)
   somaDiv<- 0 ;
   para j <- 1 ate n-1 faca
   se (n mod j = 0) entao
   somaDiv <- somaDiv+ j
   fimse
   fimpara
   se (somaDiv= n)entao
   escreval("PERFEITO")
   senao
   escreval("NÃO É PERFEITO")
   fimse
   fimpara

Fimalgoritmo