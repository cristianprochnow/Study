algoritmo "Sistema de somas até um número ser positivo"
var
cont: inteiro
n1, soma, media: real
inicio
cont<-0
escreval("Bem-vindo ao sistema de soma e média.")
escreval("")
escreval("A seguir insira os números que deseja somar e realizar a mádia,")
escreval("caso queira parar as operações dos números, digite um número negativo,")
escreval("que será exibida a média dos números inseridos.")
escreval("")
enquanto (n1>=0) faca
cont<-cont+1
escreva("Insira um valor:")
leia(n1)
escreval("")
soma<-n1+n1
media<-n1/cont
fimenquanto
escreva("Média dos valores inseridos: ", media)
fimalgoritmo
