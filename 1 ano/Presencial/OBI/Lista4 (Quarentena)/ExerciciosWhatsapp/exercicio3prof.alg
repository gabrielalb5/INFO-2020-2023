Algoritmo "semnome"
//  
//  
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 07/04/2020
Var
// Seção de Declarações das variáveis 
   n: inteiro
   maior, maiorpos: inteiro
   i: inteiro

Inicio
// Seção de Comandos, procedimento, funções, operadores, etc... 
   // innicio as variaveis com valores minimos
   maior <- -10000
   maiorpos <- -1

   para i de 1 ate 5 faca
        leia (n)
        
        se (n > maior) entao
           maior <- n
           maiorpos <- i
        fimse

   fimpara
   escreval (maior)
   escreval (maiorpos)

Fimalgoritmo