Algoritmo "semnome"
//  
//  
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 06/04/2020
Var
// Seção de Declarações das variáveis 
   a, b, c, d: inteiro
   aux: inteiro

Inicio
// Seção de Comandos, procedimento, funções, operadores, etc... 
   escreval ("Digite o tamanho das varetas")
   leia (a, b, c, d)
   
   aux <- 0

   // a, b, c
   se (a <(b+c)) e (b <(c+a)) e (c <(b+a)) entao
      aux <- 1
   fimse
   
    // a, b, d
   se (a <(b+d)) e (b <(d+a)) e (d <(b+a)) entao
      aux <- 1
   fimse
   
    // b, c, d
   se (b <(d+c)) e (d <(c+b)) e (c <(b+d)) entao
      aux <- 1
   fimse
   
    // a, c, d
   se (a <(c+d)) e (c <(b+d)) e (d <(c+a)) entao
      aux <- 1
   fimse
   
   se (aux=1) entao
   escreval ("S")
   senao
   escreval ("N")
   fimse

Fimalgoritmo