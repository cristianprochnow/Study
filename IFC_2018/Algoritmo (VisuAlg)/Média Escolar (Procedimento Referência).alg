algoritmo "Média Escolar"
var
n1,n2,n3,n4,media:real

procedimento mediaShow(var n1, n2, n3, n4:real)
inicio
      n1<-n1+1
      n2<-n2+2
      n3<-n3+3
      n4<-n4+4
      escreval(n1)
      escreval(n2)
      escreval(n3)
      escreval(n4)
      media <- (n1+n2+n3+n4) /4
                            escreval("Sua média é: ", media)
fimprocedimento
inicio
mediaShow(n1,n2,n3,n4)
escreval("Digite a primeira nota:")
leia(n1)
escreval("Digite a segunda nota:")
leia(n2)
escreval("Digite a terceira nota:")
leia(n3)
escreval("Digite a quarta nota:")
leia(n4)
mediaShow(n1,n2,n3,n4)
escreval(n1)
escreval(n2)
escreval(n3)
escreval(n4)
fimalgoritmo
