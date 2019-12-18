algoritmo "Converter R$->Dólar"
var
r, dolar: real
quant,nquant: inteiro
inicio
quant<-1
escreval("Bem-vindo ao sistema de converção de moedas.")
escreval("")
escreva("Insira quantas vezes você deseja realizar a conversão: ")
leia(nquant)
escreval("")
escreval("Insira os valores a seguir, para convertê-los.")
escreval("")
escreval("")
escreval("")
enquanto (quant<=nquant) faca
Escreval("O",quant,"º valor em R$: ")
leia(r)
escreval("")
escreva("")
quant<-quant+1
dolar<-r/3.87
escreva("O valor convertido é US$: ", dolar:4:2)
escreval("")
escreval("")
escreval("")
escreval("")
fimenquanto
fimalgoritmo
