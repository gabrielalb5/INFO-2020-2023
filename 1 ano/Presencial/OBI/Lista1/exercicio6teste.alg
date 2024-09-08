Algoritmo "semnome"
//  
//  
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 11/03/2020
Var
// Seção de Declarações das variáveis 
   c, d, u, num: inteiro
   resto, resultado: inteiro

Inicio
// Seção de Comandos, procedimento, funções, operadores, etc... 
   escreval ("Digite um numero de tres digitos")
   leia (num)
   c <- num\100
   resto <- num %100
   d <- resto\10
   u <- resto%10
   resultado <- u*100+d*10+c

   
   escreval ("O numero invertido e", resultado)

Fimalgoritmo