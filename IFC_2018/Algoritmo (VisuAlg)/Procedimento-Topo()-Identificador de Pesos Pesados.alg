algoritmo "Procedimento-Topo()"
var
cont: inteiro
nome, maisPeso: caracter
peso, maiorPeso: real

procedimento topo()
             inicio
                   limpatela
                   escreval("Detector de Mais Pesados")
                   escreval("")
                   escreval(nome, " é a pessoa mais pesada até agora, com peso de ", peso, " kg")
                   escreval("")
fimprocedimento

inicio
      topo()
            para cont<-1 ate 5 faca
                 escreva("Digite o nome: ")
                 leia(nome)
                 escreval("")
                 escreva("Digite seu peso (kg): ")
                 leia(peso)
                 escreval("")
                             se (peso>maiorPeso) entao
                                maisPeso<-nome
                                maiorPeso<-peso
                             fimse
                             topo()
            fimpara
            topo()
      escreval("A pessoa com maior peso foi ", maisPeso, " , com ", maiorPeso, " quilos.")
fimalgoritmo
