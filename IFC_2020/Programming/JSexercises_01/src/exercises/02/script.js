const linksPerDay = 6
const likesPerLink = 8

const daysAmount = prompt('Quantos dias você compartilhou links?')

const likesFromAllDays = likesPerLink * linksPerDay * daysAmount

const responseMessage = `Ao longo de ${daysAmount} dias, você recebeu um total de ${likesFromAllDays} likes.`

alert(responseMessage)
