algoritmo "Menu"
var
n: inteiro
valor:inteiro
inicio
escreval("Bem-vindo ao menu de cálculos.")
escreval("")
escreval("=================")
escreval(" |     MENU     |")
escreval("=================")
escreval("| [1] De 1 a 10 |")
escreval("| [2] De 10 a 1 |")
escreval("| [3] Sair      |")
escreval("=================")
                             repita
                                   escreva("Digite a opção desejada:")
                                   leia(n)
                                   escreval("")
                                   se (n=1) entao
                                   valor<-0
                                          repita
                                                escreval(valor)
                                                valor<-valor+1
                                          ate (valor=11)
                                   fimse
                                   escreval("")
                                   se (n=2)entao
                                      valor<-10
                                          repita
                                                escreval(valor)
                                                valor<-valor-1
                                          ate (valor=-1)
                                   fimse
                                   escreval("")
                             ate (n=3) ou (n>3) ou (n<1)
                                 escreval("")
                                 escreval("")
                                 escreval("Até a próxima.")
fimalgoritmo
