algoritmo "Fatoramento"
var
cont:inteiro
n:inteiro
valor:inteiro
decisao:caracter
inicio
       escreval("Bem-vindo ao sistema de fatoramento;")
       escreval("")
       escreva("Digite um número que você deseja fatorar: ")
       leia(n)
cont<-n
       escreval("")
       limpatela
       escreval("O fatoramento de", n, ":")
       escreval("")
                                         repita
                                         valor<-n*cont
                                         escreval(valor)
                                         cont<-cont-1
                                         ate (cont<0)

       escreval("Deseja digitar outro número? [S/N]")
       leia(decisao)
                    repita
                    se (decisao="S") ou (decisao="s") entao
                    limpatela
                                   escreva("Digite um número que você deseja fatorar: ")
                                   leia(n)
                            cont<-n
                                   escreval("")
                                   limpatela
                                   escreval("O fatoramento de", n, ":")
                                   escreval("")
                                                                     repita
                                                                     valor<-n*cont
                                                                     escreval(valor)
                                                                     cont<-cont-1
                                                                     ate (cont<0)
                    ate (decisao="N") ou (decisao="n")
                    fimse

fimalgoritmo
