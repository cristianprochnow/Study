const distanceToTheSchool = 300000 // cm

const minutesToTheSchool = Number( prompt('Quantos minutos você demora para chegar à escola?') )
const secondsToTheSchool = minutesToTheSchool * 60
const stepsUntilArriveAtSchool = Number( prompt('Quantos passos você deu para chegar à escola?') )

const widthOfEachStep = distanceToTheSchool / stepsUntilArriveAtSchool
const durationTimeOfEachStep = secondsToTheSchool / stepsUntilArriveAtSchool

let responseMessage = `A distância de cada passo é igual a ${widthOfEachStep.toFixed(2)} cm.`
alert(responseMessage)

responseMessage = `E cada passo possui uma duração de ${durationTimeOfEachStep.toFixed(2)} segundos.`
alert(responseMessage)
