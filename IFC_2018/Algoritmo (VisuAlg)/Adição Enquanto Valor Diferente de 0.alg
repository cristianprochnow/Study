algoritmo "Adição enquanto valor<>0"
var
n1,soma:real
inicio
soma<-0
escreval("Bem vindo ao sistema de Adição de valores.")
escreval("")
escreva("Digite um valor para a soma: ")
leia(n1)

enquanto n1<>0 faca
    soma<-soma+n1
    escreval("Resultado:",soma)
    escreval("")
    escreval("Digite mais um valor para ser somado:")
    leia(n1)
    escreval("")
fimenquanto

escreval("Resultado:",soma)

fimalgoritmo
