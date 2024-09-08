Algoritmo "semnome"
//  
//  
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 14/04/2020
Var
// Seção de Declarações das variáveis
   n: inteiro //variavel de entrada
   somap, somai: inteiro //variaveis de saida
   i: inteiro //variavel de laco

Inicio
// Seção de Comandos, procedimento, funções, operadores, etc... 

   para i de 1 ate 10 faca
   leia (n)
        se ((n%2)=0) entao
        somap <- somap + i
        senao
        somai <- somai + i
        fimse
   fimpara
   
   escreval ("A soma dos pares e", somap)
   escreval ("A soma dos impares e", somai)
        

Fimalgoritmo