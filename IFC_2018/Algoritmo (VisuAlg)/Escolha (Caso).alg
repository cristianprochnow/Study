algoritmo "Escolha(Caso)"
var
n1,n2,n3,n4,n5:real
valor:inteiro
inicio
escreval("Bem vindo à central de compras.")
escreva("Digite o valor total de sua compra:")
leia(n1)

escreval("")
escreval("")

escreval("Formas de pagamento: ")

escreval("")

escreval("À vista (1)")

escreval("")

escreval("Crédito (2)")

escreval("")

escreval("2x (3)")

escreval("")

escreval("5x (4)")

escreval("")
escreval("")

escreval("Agora digite a forma de pagamento desejado;")
escreval("(Digite o número correspondente à forma de pagamento desejada)")
leia(valor)

Escolha(valor)

caso 1
n2<-n1+0
escreval("Total a pagar: ",n2)

caso 2
n3<-(n1*0.10)+n1
escreval("Total a pagar: ",n3)

caso 3
n4<-(n1/2)+n1*0.10
escreval("Valor total a pagar: ",n4)

caso 4
n5<-(n1/5)+n1*0.15
escreval("Valor total a pagar: ",n5)

outrocaso
escreval("Código de seleção de forma de pagamento inválido.")
fimescolha

fimalgoritmo
