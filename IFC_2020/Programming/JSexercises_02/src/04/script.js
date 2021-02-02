const remuneration = 500
const bonusValuePerSelling = 50

const amountOfSoldProducts = Number( prompt('Quantas vendas você realizou nesse mês?') )

const totalRemunerationToReceive = remuneration + (bonusValuePerSelling * amountOfSoldProducts)

const responseMessage = `Seu salário, neste mês, será de R$ ${totalRemunerationToReceive}.`
alert(responseMessage)
