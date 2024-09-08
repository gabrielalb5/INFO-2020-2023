Algoritmo "semnome"
//
//
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 04/03/2020
Var
// Seção de Declarações das variáveis
   n1, n2: inteiro// variaveis de entrada
   dv,dd, q, r: inteiro// variaveis de saida

Inicio
// Seção de Comandos, procedimento, funções, operadores, etc...
   escreval ("Digite dois numeros")
   leia (n1)
   leia (n2)

   dd <- n1
   escreval ("O dividendo e", dd)
   dv <- n2
   escreval ("O divisor e", dv)
   q <- dd\dv
   escreval ("O quociente e", q)
   r <- dd%dv
   escreval ("O resto e", r)



Fimalgoritmo