const hoursInOneDay = 24
const daysInOneYear = 365

const userAge = Number( prompt('Qual sua idade?') )

const hoursLivedByUser = hoursInOneDay * daysInOneYear * userAge

const responseMessage = `Com ${userAge} anos, você já viveu mais de ${hoursLivedByUser} horas.`
alert(responseMessage)
