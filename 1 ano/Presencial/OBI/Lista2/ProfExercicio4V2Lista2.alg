Algoritmo "Exrcicio4Lista2"
//
//
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 11/03/2020
Var
// Seção de Declarações das variáveis
   numero: inteiro
   resto3, resto7: inteiro

Inicio
// Seção de Comandos, procedimento, funções, operadores, etc...
   escreval ("Digite um numero")
   leia (numero)
   resto3 <- numero % 3
   resto7 <- numero % 7

   se ((resto3 = 0)) e (resto7 = 0) entao
         escreval ("O numero e divisivel por 3 e 7")
   senao
        escreval ("O numero nao e divisivel por 3 ou 7")
   fimse

Fimalgoritmo