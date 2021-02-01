const novelMovieTimeInMinutes = 90
const investigationMovieTimeInMinutes = 110
const totalAMountOfMinutesFromMovies = novelMovieTimeInMinutes + investigationMovieTimeInMinutes

const timeHeSleptInMinutes = Number( prompt('Quantos minutos o rapaz dormiu?') )
const timeSheSleptInMinutes = Number( prompt('Quantos minutos a moça dormiu?') )

const timeHeStayedAwake = totalAMountOfMinutesFromMovies - timeHeSleptInMinutes
const timeSheStayedAwake = totalAMountOfMinutesFromMovies - timeSheSleptInMinutes

const responseMessageForHim = `Ele permaneceu acordado durante ${timeHeStayedAwake} minutos ao longo dos 2 filmes.`
const responseMessageForHer = `Ela permaneceu acordada durante ${timeSheStayedAwake} minutos ao longo dos 2 filmes.`

alert(responseMessageForHim)
alert(responseMessageForHer)
