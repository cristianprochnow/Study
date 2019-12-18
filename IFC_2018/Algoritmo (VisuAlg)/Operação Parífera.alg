algoritmo "Apresentação de Números Pares e Ímpares"
var
n:inteiro
contPar:inteiro
contImpar:inteiro
somaPar:inteiro
somaImpar:inteiro
mediaPar:real
mediaImpar:real
inicio
contPar<-0
contImpar<-0

escreval("Bem-vindo ao sistema de operação parífera")
escreval("")
escreval("Digite algarismos que deseja, onde no final, a soma e a média dos mesmos será dividida em números pares e ímpares.")
escreval("")

            repita
                  escreva("Insira um número: ")
                  leia(n)
                  escreval("")
                              se (n%2=0) e (n<>0) entao
                                 contPar<-contPar+1
                                 somaPar<-somaPar+n
                              fimse
                                   se (n%2>0) e (n<>0) entao
                                      contImpar<-contImpar+1
                                      somaImpar<-somaImpar+n
                                   fimse
            ate (n=0)

mediaPar<-somaPar/contPar
mediaImpar<-somaImpar/contImpar

escreval("A soma dos números pares inseridos é: ",somaPar)
escreval("")
escreval("A média dos números pares inseridos é: ",mediaPar)
escreval("")
escreval(contPar, " número(s) par(es) foi(foram) inserido(s).")
escreval("")
escreval("")
escreval("A soma dos números ímpares inseridos é:", somaImpar)
escreval("")
escreval("A média dos números ímpares inseridos é:", mediaImpar)
escreval("")
escreval(contImpar," número(s) ímpar(es) foi(foram) inserido(s).")
fimalgoritmo
