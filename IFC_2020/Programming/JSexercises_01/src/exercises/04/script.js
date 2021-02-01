const missedScorePerEvery100Tweets = 1

const initialStudentGrade = Number( prompt('Qual a nota inicial do aluno?') )
const totalAmountOfTweets = Number( prompt('Qual a quantidade total de tweets feitos pelo aluno?') )

const timesThatTweetsCanBeDividedBy100 = Math.floor(totalAmountOfTweets / 100)

const scoreToBeSubtratedFromStudent = missedScorePerEvery100Tweets * timesThatTweetsCanBeDividedBy100
const finalStudentGrade = initialStudentGrade - scoreToBeSubtratedFromStudent

const responseMessage = `Já que foram criados ${totalAmountOfTweets} tweets, serão subtraídos ${scoreToBeSubtratedFromStudent} pontos da média. Sendo assim, a nota final será ${finalStudentGrade}.`

alert(responseMessage)
