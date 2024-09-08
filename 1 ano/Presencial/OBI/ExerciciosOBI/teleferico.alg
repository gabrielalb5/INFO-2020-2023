Algoritmo "Teleferico"
//  
//  
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Gabriel Albino
// Data atual  : 05/04/2020
Var
// Seção de Declarações das variáveis 
   C, A: inteiro
   R: inteiro

Inicio
// Seção de Comandos, procedimento, funções, operadores, etc... 
   escreval ("Digite a capacidade da gabine do teleferico")
   leia (C)
   escreval ("Digite a quantidade de alunos")
   leia (A)
   C <- C-1
   R <- A\C
   
   se ((a%c) <> 0) entao
      R <- R+1
   fimse
   escreval ("O numero minimo de viagens que o teleferico deve fazer e de:", R)

Fimalgoritmo