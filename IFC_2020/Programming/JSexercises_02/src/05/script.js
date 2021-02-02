const valuePerAdCLick = 0.02

const desiredGain = Number( prompt('Quanto deseja ganhar?') )

const clicksAmountNeededToReachDesiredGain = desiredGain / valuePerAdCLick

const responseMessage = `Para ganhar R$ ${desiredGain}, você necessitará de ${clicksAmountNeededToReachDesiredGain} cliques em seus anúncios.`
alert(responseMessage)
