const amountOfMonstersToBeEliminatedPerLevel = 150
const amountOfEliminatedMonsters = Number( prompt('Quantos monstros você já matou?') )
const levelOfPlayer = amountOfEliminatedMonsters / amountOfMonstersToBeEliminatedPerLevel

const responseMessage = `Já que matou um total de ${amountOfEliminatedMonsters} monstros, você se encontra no nível ${levelOfPlayer}.`
alert(responseMessage)
