algoritmo "Menu"
var
n: inteiro
inicio
escreval("Bem vindo ao Menu de op��es.")
escreval("O programa de escolha a seguir � deveras pesada para alguns Hardwares.")
escreval("")
escreva("A seguir digite a op��o que melhor se encaixa ao seu hardware")
escreval("")
escreval("")
escreval("1. Intel Core i5, 8 GB de RAM")
escreval("")
escreval("2. Intel Core i7, 16 GB de RAM")
escreval("")
escreval("3. Nenhuma das alternativas acima, sair do programa")
escreval("")
            repita
escreva("Digite a op��o desejada:")
leia(n)
       se (n=1) entao
          escreval("Seu Hardware � o recomendado, sua permiss�o para acessar o programa")
          escreval("foi aceita.")
       fimse
       se (n=2) entao
          escreval("Seu Hardware � mais do que o suficiente, sua permiss�o para acessar")
          escreval("o programa foi aceita.")
       fimse
            ate (n=3)
                escreval("Seu hardware � insuficiente, tente novamente mais tarde.")


fimalgoritmo
