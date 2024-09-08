Algoritmo "Exercicio7Lista2"
//  
//  
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 11/03/2020
Var
// Seção de Declarações das variáveis 
   n1, n2, n3: inteiro

Inicio
// Seção de Comandos, procedimento, funções, operadores, etc... 
   escreval ("Digite tres numeros:")
   leia (n1)
   leia (n2)
   leia (n3)
   
   se (n1>n2) e (n1>n3) entao
   escreval ("O maior numero e: ", n1)
   senao
   se (n2>n1) e (n2>n3) entao
   escreval ("O maior numero e: ", n2)
   senao
   se (n3>n1) e (n3>n2) entao
   escreval ("O maior numero e: ", n3)
   senao
   escreval ("Numeros iguais")
   fimse
   fimse
   fimse

Fimalgoritmo