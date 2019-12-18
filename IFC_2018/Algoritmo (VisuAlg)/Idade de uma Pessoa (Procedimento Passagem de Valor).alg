algoritmo "idade_de_pessoa"
var
ano_nasc,ano_now,idade:inteiro
procedimento idadeShow(ano_nasc, ano_now:inteiro)
inicio
      ano_nasc<-ano_nasc+1
      idade<-ano_now-ano_nasc
      escreval(ano_nasc)
      escreval(ano_now)
      escreval("Sua data de nascimento é(1 ano depois): ", ano_nasc)
      escreval("Sua idade é (1 ano mais novo): ", idade)
fimprocedimento

inicio
idadeShow(Ano_nasc,ano_now)
escreva("Insira o ano atual: ")
leia(ano_now)
escreva("Insira seu ano de nascimento: ")
leia(ano_nasc)
idadeShow(Ano_nasc,ano_now)
escreval(ano_nasc)
escreval(ano_now)

fimalgoritmo
