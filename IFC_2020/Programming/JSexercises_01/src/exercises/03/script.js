const periodsAmount = 4
const classesPerPeriod = 20
const classesPerYear = classesPerPeriod * periodsAmount

const tweetsAmount = prompt('Quantos tweets você cria por aula?')

const tweetsPerYear = Number(tweetsAmount) * classesPerYear

const responseMessage = `Nesse ano você fez um total de ${tweetsPerYear} tweets enquanto estava em aula.`

alert(responseMessage)
