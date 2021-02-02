const amountOfReadBooks = Number( prompt('Quantos livros você já leu?') )
const amountOfMonthsSinceFirstReadBook = Number( prompt('Faz quantos meses desde que você leu seu primeiro livro?') )

const readBooksPerMonth = amountOfReadBooks / amountOfMonthsSinceFirstReadBook

const responseMessage = `Você leu uma média de ${readBooksPerMonth} livros por mês!`
alert(responseMessage)
