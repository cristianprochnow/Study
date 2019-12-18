algoritmo "Tabuada"
var
n, mult, resposta: real
inicio
mult<--1
escreval("Bem vindo ao sistema de Tabuadas")
escreval("")
escreval("Insira a seguir o número que deseja ver a Tabuada: ")
leia(n)
escreval("")
enquanto (mult<10) faca
mult<-mult+1
resposta<-n*mult
escreval(n," X ", mult, "=", resposta)
escreval("")
fimenquanto
fimalgoritmo
