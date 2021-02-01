const durationOfGameInHours = 78

const hoursPerDayAvailableToPLayInHours = Number( prompt('Quantas horas disponíveis por dia você possui para jogar o RPG?') )

const approximateAmountOfDaysSpendPlaying = Math.floor( durationOfGameInHours / hoursPerDayAvailableToPLayInHours )

const responseMessage = `Jogando ${hoursPerDayAvailableToPLayInHours} horas por dia, serão necessários ${approximateAmountOfDaysSpendPlaying} dias jogando para completar o RPG.`
alert(responseMessage)
