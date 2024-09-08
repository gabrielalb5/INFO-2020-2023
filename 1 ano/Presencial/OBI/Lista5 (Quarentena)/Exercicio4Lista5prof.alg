Algoritmo "semnome"
//  
//  
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 14/04/2020
Var
// Seção de Declarações das variáveis 
   n: inteiro//entrada
   soma:inteiro//auxiliar
   i: inteiro//controle
   
Inicio
// Seção de Comandos, procedimento, funções, operadores, etc... 
   soma <- 0
   
   leia (n)
   
   //obtendo e somando os divisores de n
   para i de 1 ate (n-1) faca
        se ((n % i) = 0) entao
        soma <- soma + i
        fimse
   fimpara
   
   se (soma = n) entao
      escreval ("Numero perfeito")
   senao
        escreval ("Numero nao perfeito")
   fimse

Fimalgoritmo