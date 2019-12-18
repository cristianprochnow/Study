algoritmo "semnome"
var
N: inteiro
procedimento ParOuImpar (V: inteiro)
inicio
      se (V%2=0) entao
         escreval("O número ", V, " é par.")
      senao
         escreval("O número ", V, " é ímpar.")
      fimse
fimprocedimento

inicio
      escreva("Digite um número: ")
      leia(N)
      ParOuImpar(N)
fimalgoritmo
