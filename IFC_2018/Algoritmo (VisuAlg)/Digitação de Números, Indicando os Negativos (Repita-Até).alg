algoritmo "Digitação de Números, indicando os negativos"
var
n:inteiro
cont:inteiro
valor:inteiro
inicio
escreval("Bem-vindo ao sistema de digitação numérica")
escreval("")
cont<-0
valor<-0

repita
      cont<-cont+1
      escreva("Digite um algarismo:")
      leia(n)
             se(n<0)entao
             valor<-valor+1
             fimse
ate (cont=8)

escreval("")
escreval("Foram inseridos", valor, " números negativos.")
fimalgoritmo
