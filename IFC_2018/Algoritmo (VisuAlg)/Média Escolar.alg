algoritmo "Média Escolar"
var
n1,n2,n3,n4,n10,media,nova_media:real
inicio
escreval("Digite a primeira nota:")
leia(n1)
escreval("Digite a segunda nota:")
leia(n2)
escreval("Digite a terceira nota:")
leia(n3)
escreval("Digite a quarta nota:")
leia(n4)
media<-(n1+n2+n3+n4)/4
se(media>=7)entao
escreval("Você foi aprovado com a média igual a:",media)
senao
escreval("Digite a nota da recuperação:")
leia(n10)
nova_media<-(media+n10)/2
se(nova_media>=5)entao
escreval("Você foi aprovado. Sua nota final é de:",nova_media)
senao
escreval("Você está reprovado.Sua nota final é de:",nova_media)
fimse
fimse

fimalgoritmo
