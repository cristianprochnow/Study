algoritmo "Média de Alunos (Para-Até)"
var
n1, n2, n3, media, soma, menorMedia, maiorMedia: real
x, numAlunos, alunoMaior, alunoMenor, pass, noPass: inteiro
inicio
escreval("Bem-vindo ao sistema de notas.")
escreval("")
escreval("Digite a seguir as notas correspondentes de cada aluno.")
escreval("")
escreva("Digite o número total de alunos da sala: ")
leia(numAlunos)
escreval("")
escreval("")
x<-0
menorMedia<-10
maiorMedia<-0
pass<-0
noPass<-0
            para x de 1 ate numAlunos faca
                 escreva("Digite a primeira nota: ")
                 leia(n1)
                 escreval("")
                 escreva("Digite a segunda nota: ")
                 leia(n2)
                 escreval("")
                 escreva("Digite a terceira nota: ")
                 leia(n3)
                 escreval("")
                 soma<-n1+n2+n3
                 media<-soma/3
                 escreval("A média do", x, " º aluno é: ", media:3:2)
                 escreval("")
                 escreval("")
                 
                             se (media<=menorMedia) entao
                                menorMedia<-media
                                alunoMenor<-x
                             fimse
                             
                             se (media>=maiorMedia) entao
                                maiorMedia<-media
                                alunoMaior<-x
                             fimse
                             
                             se (media>=7.00) entao
                                pass<-pass+1
                             senao
                                noPass<-noPass+1
                             fimse
            fimpara
escreval("")

escreval("A maior media foi do ", alunoMaior, " º aluno, com a média de: ", maiorMedia:3:2)
escreval("")
escreval("A menor media foi do ", alunoMenor, " º aluno, com a média de: ", menorMedia:3:2)
escreval("")
escreval("")
escreval(pass, " alunos foram aprovados.")
escreval("")
escreval(noPass, " alunos foram reprovados.")
escreval("")
fimalgoritmo
