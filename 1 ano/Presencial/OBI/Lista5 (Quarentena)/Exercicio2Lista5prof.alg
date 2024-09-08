Algoritmo "semnome"
//
//
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 13/04/2020
Var
// Seção de Declarações das variáveis
 a1, an, r, n, i: inteiro

Inicio
// Seção de Comandos, procedimento, funções, operadores, etc...
   escreval ("Digite o primeiro termo")
   leia (a1)
   escreval ("Digite a razao")
   leia (r)
   escreval ("Digite a qual termo que deseja saber")
   leia (n)

   para i de 1 ate n faca
        an <- a1+(i-1)*r
        escreva (an, " ")
   fimpara

   escreval (an)

Fimalgoritmo