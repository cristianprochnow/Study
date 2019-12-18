algoritmo "Números Pares e Ímpares"
var
n: inteiro
cont: inteiro
inicio
escreval("Bem-vindo ao contador de números pares")
escreval("")
escreva("Digite um valor:")
leia(n)
escreval("")
       para cont<-0 ate n passo 2 faca
            escreval(cont)
       fimpara
escreval("")
       para cont<-1 ate n passo 2 faca
            escreval(cont)
       fimpara
escreval("")
   se (n%2=1) entao
      para cont<-n ate 0 passo -2 faca
            escreval(cont)
       fimpara
   fimse
escreval("")
   se (n%2=0) entao
      para cont<-n ate 0 passo -2 faca
           escreval(cont)
      fimpara
   fimses
escreval("")
fimalgoritmo
