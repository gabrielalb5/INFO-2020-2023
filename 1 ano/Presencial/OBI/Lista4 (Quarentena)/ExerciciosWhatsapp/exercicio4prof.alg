Algoritmo "semnome"
//  
//  
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 07/04/2020
Var
// Seção de Declarações das variáveis 
   m, n: inteiro
   ini, fim: inteiro
   soma: inteiro
   i: inteiro

Inicio
// Seção de Comandos, procedimento, funções, operadores, etc... 
   soma <- 0
   leia (m)
   leia (n)
   
   //qual numero é maior?
   se (m > n) entao
      ini <- n
      fim <- m
   senao
        ini <- m
        fim <- n
   fimse
   
   para i de ini ate fim faca
        escreval (i, " ")
        soma <- soma+i
   fimpara
   
   escreva ("Soma:", soma)

Fimalgoritmo