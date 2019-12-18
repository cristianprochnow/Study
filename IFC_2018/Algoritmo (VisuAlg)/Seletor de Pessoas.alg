algoritmo "Seletor de Pessoas"
var
contM: inteiro
contF: inteiro
sexo: caracter
idade: inteiro
corCabelo: inteiro
decisao: caracter
inicio
contM<-0
contF<-0
      escreval("Bem-vindo as sistema de seleção de pessoas.")
      escreval("")
      escreval("Complete abaixo, o questionário com as respectivas características:")
      escreval("")
      escreval("")
repita
      escreval("Seletor de Pessoas:")
      escreval("")
      escreva("Qual sexo? (M/F) ")
      leia(sexo)
      escreva("Qual a idade? ")
      leia(idade)
      escreva("Qual a cor do cabelo? ")
      escreval("")
      escreval("[1] Preto")
      escreval("[2] Castanho")
      escreval("[3] Loiro")
      escreval("[4] Ruivo")
      leia(corCabelo)
      escreval("")
      escreva("Deseja continuar? (S/N) ")
      leia(decisao)
                   limpatela
                            se (sexo="M") e (idade>18) e (corCabelo=2) entao
                               contM<-contM+1
                            fimse
                            se (sexo="F")e (idade>25) ou (idade<30) e (corCabelo=3) entao
                               contF<-contF+1
                            fimse
ate (decisao="N") ou (decisao="n")
escreval("")
escreval("Resultado Final")
escreval("")
escreval("")
escreval("Total de homens maiores de 18 anos e que têm cabelos castanhos: ", contM)
escreval("")
escreval("Total de mulheres entre 25 e 30 anos que possuem cabelos loiros: ", contF)
fimalgoritmo
