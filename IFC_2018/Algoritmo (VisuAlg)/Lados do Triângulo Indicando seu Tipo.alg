algoritmo "Lados do Triângulo Indicando seu Tipo/Modelo"
var
n1,n2,n3:inteiro
inicio
escreva("Digite a primeira medida dos lados do triângulo: ")
leia(n1)
escreval("")
escreva("Digite a segunda medida dos lados do triângulo: ")
leia(n2)
escreval("")
escreva("Digite a terceira medida dos lados do triângulo: ")
leia(n3)
escreval("")

se(n1=n2)e(n2=n3)e(n3=n1)entao
escreval("Suas medidas são de um triângulo equilátero.")
escreval("")
senao

se(n1=n2)e(n2<>n3)e(n3<>n1)entao
escreval("Suas medidas são de um triângulo isósceles.")
escreval("")
senao
escreval("Suas medidas são de um triângulo isósceles.")

se(n1<>n2)e(n2<>n3)e(n3<>n1)entao
escreval("Suas medidas são de um triângulo escaleno.")
escreval("")
senao

fimse
fimse
fimse
fimalgoritmo
