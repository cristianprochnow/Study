const ticketValue = 170

function askToUser(
  message,
  defaultValue = ''
) {
  const formattedMessage = String(message).trim()

  const userAnswer = prompt(
    formattedMessage,
    defaultValue
  )

  return userAnswer
}

function calculateExpense(
  cost,
  offerValue = cost
) {
  const expense = Number(offerValue) - Number(cost)

  return expense
}

function defineResponseMessageAboutExpense(expense = 0) {
  function formattedExchange(moneyValue) {
    const exchangeFormatter = new Intl.NumberFormat(
      'pt-BR',
      {
        style: 'currency',
        currency: 'BRL'
      }
    )

    const formattedMoney = Number(expense)
    const formattedExchange = exchangeFormatter.format(formattedMoney)

    return formattedExchange
  }

  const formattedExpense = formattedExchange(expense)

  if (expense < 0) {
    return `Você saiu no prejuízo, já que o retorno foi de ${formattedExpense}.`
  } else {
    return `Seu ganho foi de ${formattedExpense}.`
  }
}

const userOffer = askToUser(
  'Insira sua proposta para comprar o ingresso:',
  170
)

const expense = calculateExpense(
  ticketValue,
  userOffer
)

const responseAboutCost = defineResponseMessageAboutExpense(expense)

alert(responseAboutCost)
