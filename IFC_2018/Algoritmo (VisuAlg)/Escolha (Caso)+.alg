algoritmo "Escolha (Caso)"
var
nome:caractere
cod:inteiro
inicio
escreval("Bem-vindo ao sistema de cadastro.")
escreval("")
escreval("Digite seu nome:")
leia(nome)
escreval("")
escreval("Agora informe seu código de qualificação como Lorde da Transancia:")
escreval("")
escreval("Código          Categoria")
escreval("")
escreval("1001          Pequeno Ornitorrinco")
escreval("1002          Toda Vida eReto")
escreval("1003          Tá Saindo da Jaula")
escreval("1004          Brabo")
escreval("1005          Bichão")
escreval("1006          Pai de Família")
escreval("")
escreva("Código de Escolha:")
leia(cod)
escreval("")

escolha(cod)
caso 1001
escreval("Seu cadastro foi bem sucedido",nome,"(Seu código é:",cod,")")
escreval("Sua patente é: Pequeno Ornitorrinco.")

caso 1002
escreval("Seu cadastro foi bem sucedido",nome,"(Seu código é:",cod,")")
escreval("Sua patente é: Toda Vida eReto.")

caso 1003
escreval("Seu cadastro foi bem sucedido",nome,"(Seu código é:",cod,")")
escreval("Sua patente é: Tá Saindo da Jaula.")

caso 1004
escreval("Seu cadastro foi bem sucedido",nome,"(Seu código é:",cod,")")
escreval("Sua patente é: Brabo.")

caso 1005
escreval("Seu cadastro foi bem sucedido",nome,"(Seu código é:",cod,")")
escreval("Sua patente é: Bichão.")

caso 1006
escreval("Seu cadastro foi bem sucedido",nome,"(Seu código é:",cod,")")
escreval("Sua patente é: Pai de Família.")

outrocaso
escreval("Parece que você errou...")
fimescolha

escreval("")
escreval("Aperte Alt+F4 para encerrar a sessão.")
fimalgoritmo
