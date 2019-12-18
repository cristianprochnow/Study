algoritmo "Menu"
var
n: inteiro
inicio
escreval("Bem vindo ao Menu de opções.")
escreval("O programa de escolha a seguir é deveras pesada para alguns Hardwares.")
escreval("")
escreva("A seguir digite a opção que melhor se encaixa ao seu hardware")
escreval("")
escreval("")
escreval("1. Intel Core i5, 8 GB de RAM")
escreval("")
escreval("2. Intel Core i7, 16 GB de RAM")
escreval("")
escreval("3. Nenhuma das alternativas acima, sair do programa")
escreval("")
            repita
escreva("Digite a opção desejada:")
leia(n)
       se (n=1) entao
          escreval("Seu Hardware é o recomendado, sua permissão para acessar o programa")
          escreval("foi aceita.")
       fimse
       se (n=2) entao
          escreval("Seu Hardware é mais do que o suficiente, sua permissão para acessar")
          escreval("o programa foi aceita.")
       fimse
            ate (n=3)
                escreval("Seu hardware é insuficiente, tente novamente mais tarde.")


fimalgoritmo
