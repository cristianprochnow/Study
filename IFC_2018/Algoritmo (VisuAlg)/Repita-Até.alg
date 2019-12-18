algoritmo "Repita-Até"
var
n: inteiro
cont:inteiro
valor:inteiro
inicio
cont<-0
escreval("Bem-vindo ao sistema de tabuadas")
escreva("Insira o número que deseja ver a tabuada: ")
leia(n)
repita
cont<-cont+1
valor<-n*cont
escreval(n, "x", cont, "=", valor)
ate (cont>=10)
fimalgoritmo
