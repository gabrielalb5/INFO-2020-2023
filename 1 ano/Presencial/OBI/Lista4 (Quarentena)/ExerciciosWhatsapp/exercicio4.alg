Algoritmo "semnome"
//  
//  
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 06/04/2020
Var
// Seção de Declarações das variáveis 
   M, N: inteiro
   s: inteiro

Inicio
// Seção de Comandos, procedimento, funções, operadores, etc... 
   escreval ("Digite dois numeros com 2 numeros de distancia para somar")
   leia (M)
   leia (N)
   
   se M>N entao
   s <- (M)+(M+1)+(N-1)+(N)
   escreval ("A soma dos numeros e", s)
   senao
   se N>M entao
   s <- (N+1)+(N)+(M-1)+(M)
   escreval("A soma dos numeros e", s)
   fimse
   fimse

Fimalgoritmo