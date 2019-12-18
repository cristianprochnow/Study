algoritmo "Calculadora"
var
n1,n2,soma,sub,multi,divi:real
inicio
escreval("Digite o primeiro valor: ")
leia(n1)
escreval("Digite o segundo valor: ")
leia(n2)
soma:=n1+n2
escreval("Valor resultante da adição: ",soma)
se(n1>n2)entao
sub:=n1-n2
escreval("Valor resultante da subtração: ",sub)
senao
sub:=n2-n1
escreval("Valor resultante da subtração: ",sub)
fimse
multi:=n1*n2
escreval("Valor resultante da multiplicação: ",multi)
se(n1>n2)entao
divi:=n1/n2
escreval("Valor resultante da divisão: ",divi)
senao
divi:=n2/n1
escreval("Valor resultante da divisão: ",divi)
fimse
fimalgoritmo
