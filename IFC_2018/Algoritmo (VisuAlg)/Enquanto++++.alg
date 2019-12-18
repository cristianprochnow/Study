algoritmo "Enquanto++++"
var
media,n,s,repet,maiorvalor:real
inicio

repet<-1
s<-0

escreval("Bem-vindo ao sistema de médias.")
escreval("Insira a seguir os valores que deseja.")

enquanto (repet<=10) faca
    escreva("Digite o ", repet," º número: ")
    leia(n)
    repet<- repet+1
fimenquanto
se (n>maiorvalor) entao
    maiorvalor<-n

    escreva("O maior valor inserido é: ", maiorvalor)
fimse
fimalgoritmo
