algoritmo "Sistema de Média de 10 Alunos"
var
n1,n2,media:real
quant,alunos:inteiro
nomeAluno:caractere
inicio
quant<-0
escreval("Bem-vindo ao sistema de cálculo de notas.")
escreval("")
escreval("Insira a seguir, o número de alunos de sua classe.")
leia(alunos)
escreval("")
escreval("Insira a seguir o nome de cada aluno e suas respectivas notas.")
escreval("")
enquanto (quant<alunos) faca
quant<-quant+1
escreva("Insira o nome do aluno: ")
leia(nomeAluno)
escreval("")
escreval("")
escreva("Insira a 1º nota de ", nomeAluno,": ")
leia(n1)
escreval("")
escreva("Insira a 2º nota de ", nomeAluno,": ")
leia(n2)
escreval("")
escreval("")
media<-(n1+n2)/2
escreval("")
se (media>=7.0) entao
escreval(nomeAluno," foi aprovado.")
escreval("")
escreva("Sua média foi de:",media)
senao
escreval(nomeAluno," está reprovado")
escreval("")
escreval("Sua média foi de: ",media)
escreval("")
escreval("")
fimse
fimenquanto
fimalgoritmo
