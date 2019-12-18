algoritmo "Gaming"

var
valor,valor2:real
cod,cod2:inteiro
esc:caractere
inicio
escreval("Bem vindo ao nosso sistema de Monte seu PC")
escreval("")

escreval("Escolha a seguir a configuração que você deseja:")
escreval("")
escreval("")

escreval("Código        Configuração                   Valor")
escreval("")
escreval("1             i5 8400 - GTX 1060             R$ 2 900,00")
escreval("               HD 1TB - 8GB de Ram               ")
escreval("")
escreval("2             Ryzen 5 2600 - RX VEGA 56      R$ 2 800,00")
escreval("               HD 1TB - 8GB de Ram                  ")
escreval("")
escreval("3             i3 8100 - GTX 1060 3GB         R$ 2 500,00")
escreval("               HD 1 TB - 8GB de Ram                 ")
escreval("")
escreval("4             i7 8700k - GTX 1080 Ti         R$ 12 000,00")
escreval("               HD 2TB + SSD 480 GB                   ")
escreval("                  16GB de Ram"                       )
escreval("")
escreval("5             Ryzen 7 2700x - RX VEGA 64     R$ 10 000,00")
escreval("               HD 2TB + SSD 480 GB                   ")
escreval("                  16GB de Ram"                       )
escreval("")
escreval("")

escreval("Digite seu código de escolha de configuração:")
leia(cod)
escreval("")

escolha(cod)

caso 1
escreval("Você aceita pagar 10% a mais do valor para personalizar sua máquina com LEDs?")
escreval("")
escreval("SIM ou NÃO?")
escreval("")
leia(esc)
se(esc="SIM") ou (esc="sim") ou (esc="Sim") ou (esc="sIm") ou (esc="siM") ou (esc="SIm") ou (esc="sIM") ou (esc="SiM")entao
valor<-2900+(2900*0.10)
senao
valor<-2900
fimse

caso 2
escreval("Você aceita pagar 10% a mais do valor para personalizar sua máquina com LEDs?")
escreval("")
escreval("SIM ou NÃO?")
escreval("")
leia(esc)
se(esc="SIM") ou (esc="sim") ou (esc="Sim") ou (esc="sIm") ou (esc="siM") ou (esc="SIm") ou (esc="sIM") ou (esc="SiM")entao
valor<-2800+(2800*0.10)
senao
valor<-2800
fimse

caso 3
escreval("Você aceita pagar 10% a mais do valor para personalizar sua máquina com LEDs?")
escreval("")
escreval("SIM ou NÃO?")
escreval("")
leia(esc)
se(esc="SIM") ou (esc="sim") ou (esc="Sim") ou (esc="sIm") ou (esc="siM") ou (esc="SIm") ou (esc="sIM") ou (esc="SiM")entao
valor<-2500+(2500*0.10)
senao
valor<-2500
fimse

caso 4
escreval("Você aceita pagar 10% a mais do valor para personalizar sua máquina com LEDs?")
escreval("")
escreval("SIM ou NÃO?")
escreval("")
leia(esc)
se(esc="SIM") ou (esc="sim") ou (esc="Sim") ou (esc="sIm") ou (esc="siM") ou (esc="SIm") ou (esc="sIM") ou (esc="SiM")entao
valor<-12000+(12000*0.10)
senao
valor<-12000
fimse

caso 5
escreval("Você aceita pagar 10% a mais do valor para personalizar sua máquina com LEDs?")
escreval("")
escreval("SIM ou NÃO?")
escreval("")
leia(esc)
se(esc="SIM") ou (esc="sim") ou (esc="Sim") ou (esc="sIm") ou (esc="siM") ou (esc="SIm") ou (esc="sIM") ou (esc="SiM")entao
valor<-10000+(10000*0.10)
senao
valor<-10000
fimse
fimescolha
escreval("")
escreval("")

escreval("Deseja acrescentar algo a mais na sua máquina?")
escreval("Código     Configuração           Valor")
escreval("")
escreval("1          Kit 3 ventoinhas RGB   R$ 120,00")
escreval("2          Water Cooler           R$ 250,00")
escreval("3          Air Cooler             R$ 180,00")
escreval("4          Cooler Box de Fábrica")
escreval("")
escreval("Digite seu código de escolha")
leia(cod2)
escreval("")
escreval("")

escolha(cod2)

caso 1
escreval("A configuração adicional escolhida é o Kit de ventoinhas RGB.")
valor2<-valor+120.00
escreval("O valor total da compra foi de:",valor2)

caso 2
escreval("A configuração adicional escolhida foi o Water Cooler.")
valor2<-valor+250.00
escreval("O valor total da compra foi de:",valor2)

caso 3
escreval("A configuração adicional escolhida foi o Air Cooler.")
valor2<-valor+180.00
escreval("O valor total da compra foi de:",valor2)

outrocaso
escreval("O valor total da compra foi de:",valor)

fimescolha
fimalgoritmo
