const peopleNeededForTheBandPlayMusic = 1200
const totalAmountOfPeople = Number( prompt('Quantas pessoas há no show?') )
const amountOfMusicsToBePlayed = Math.floor( totalAmountOfPeople / peopleNeededForTheBandPlayMusic )

const responseMessage = `Vocês deverão tocar ${amountOfMusicsToBePlayed} músicas, sem mais delongas!`
alert(responseMessage)
