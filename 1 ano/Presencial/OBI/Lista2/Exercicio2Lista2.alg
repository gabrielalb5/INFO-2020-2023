Algoritmo "exercicio2lista2"
//  
//  
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 05/03/2020
Var
// Seção de Declarações das variáveis 
   numero: inteiro// entrada
   resto: inteiro// processamento

Inicio
// Seção de Comandos, procedimento, funções, operadores, etc... 
   //leitura do numero
   leia (numero)
   resto <- numero % 2// obtem o resto do n/2
   
   se (resto = 0) entao
      escreval ("Numero par")
   senao
        escreval ("Numero impar")
fimse

Fimalgoritmo