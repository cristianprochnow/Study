algoritmo "Sorveteria"
var
cod:inteiro
cont1, cont2, cont3, cont4, cont5, cont6, cont7, cont8:real
preco1, preco2, preco3, preco4, preco5, preco6, preco7, preco8:real
valorTotal:real
inicio
cont1<-0
cont2<-0
cont3<-0
cont4<-0
cont5<-0
cont6<-0
cont7<-0
cont8<-0
        repita
            escreval("Bem vindo à nossa sorveteria online.")
            escreval("")
            escreval("Acompanhe a tabela abaixo para realizar seu pedido.")
            escreval("")
            escreval("Digite 1 -> Casquinha com 1 bola                                      R$ 1,50")
            escreval("Digite 2 -> Casquinha com 2 bolas                                     R$ 3,20")
            escreval("Digite 3 -> Cascão com 1 bola                                         R$ 2,40")
            escreval("Digite 4 -> Cascão com 2 bolas                                        R$ 4,90")
            escreval("Digite 5 -> Copinho com 1 bola                                        R$ 2,00")
            escreval("Digite 6 -> copinho com 2 bolas                                       R$ 4,10")
            escreval("Digite 7 -> Milk Shake                                                R$ 5,30")
            escreval("Digite 8 -> Vaca Preta (Sorvete de chocolate num meio de Coca-Cola)   R$ 7,90")
            escreval("Digite 0 caso queira finalizar a compra")
            escreval("")
            escreva("Digite aqui o número respectivo ao seu pedido: ")
            leia(cod)
                     escolha(cod)
                                 caso 1
                                      preco1<-1.50
                                      cont1<-cont1+1
                                      preco1<-preco1*cont1
                                 caso 2
                                      preco2<-3.20
                                      cont2<-cont2+1
                                      preco2<-preco2*cont2
                                 caso 3
                                      preco3<-2.40
                                      cont3<-cont3+1
                                      preco3<-preco3*cont3
                                 caso 4
                                      preco4<-4.20
                                      cont4<-cont4+1
                                      preco4<-preco4*cont4
                                 caso 5
                                      preco5<-2.00
                                      cont5<-cont5+1
                                      preco5<-preco5*cont5
                                 caso 6
                                      preco6<-4.10
                                      cont6<-cont6+1
                                      preco6<-preco6*cont6
                                 caso 7
                                      preco7<-5.30
                                      cont7<-cont7+1
                                      preco7<-preco7*cont7
                                 caso 8
                                      preco8<-7.90
                                      cont8<-cont8+1
                                      preco8<-preco8*cont8
                     fimescolha
            limpatela
        ate (cod=0)
        escreval("")
                        escreval("Quantidade de casquinhas de 1 bolas:", cont1)
                        escreval("Valor Total: R$ ", preco1)
                        escreval("")
                        escreval("Quantidade de casquinhas de 2 bolas:", cont2)
                        escreval("Valor Total: R$ ", preco2)
                        escreval("")
                        escreval("Quantidade de cascões de 1 bola:", cont3)
                        escreval("Valor Total: R$ ", preco3)
                        escreval("")
                        escreval("Quantidade de cascões de 2 bolas:", cont4)
                        escreval("Valor Total: R$ ", preco4)
                        escreval("")
                        escreval("Quantidade de copinho de 1 bola:", cont5)
                        escreval("Valor Total: R$ ", preco5)
                        escreval("")
                        escreval("Quantidade de copinho de 2 bolas:", cont6)
                        escreval("Valor Total: R$ ", preco6)
                        escreval("")
                        escreval("Quantidade de Milk Shakes:", cont7)
                        escreval("Valor Total: R$ ", preco7)
                        escreval("")
                        escreval("Quantidade de Vacas Pretas:", cont8)
                        escreval("Valor Total: R$ ", preco8)
                        escreval("")
                        escreval("")
                        escreval("Obrigado pela atenção, até a próxima.")
fimalgoritmo
