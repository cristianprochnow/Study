Promise.resolve()
  // .then(() => exercise_01()
  // .then(() => exercise_02())
  // .then(() => exercise_03())
  .then(exercise_04)

function exercise_01() {
  const teams = []
  let bestTeam

  for (let counter = 0; counter < 2; counter++) {
    const name = String(prompt('Qual o time?'))
    const goals = Number(prompt('Quantos gols fez o time?'))

    const teamsData = {
      name,
      goals
    }

    teams.push(teamsData)
  }

  teams.map((team, index) => {
    if (index === 0) bestTeam = team

    if (team.goals >= bestTeam.goals) bestTeam = team
  })

  alert(`O melhor time é o(a) ${bestTeam.name}`)
}

function exercise_02() {
  const citizenships = [
    {
      name: 'Carioca',
      state: 'RJ'
    },
    {
      name: 'Paulista',
      state: 'SP'
    },
    {
      name: 'Mineiro',
      state: 'MG'
    }
  ]
  let isUserAtOneOfTheCategories = false
  let definedCitizenshipOfUser = ''

  function askCitizenship() {
    return String(prompt('Qual a sigla de seu estado onde você nasceu?'))
  }

  const stateAbbreviationOfLocalizationWhereUserCameFrom = askCitizenship()

  for (let citizenship of citizenships) {
    let isEqualCitizenship = citizenship.state === stateAbbreviationOfLocalizationWhereUserCameFrom

    if (isEqualCitizenship) {
      isUserAtOneOfTheCategories = true
      definedCitizenshipOfUser = citizenship.name

      break
    }
  }

  if (isUserAtOneOfTheCategories) {
    alert(`Olá, bem-vindo! Fico feliz que você seja ${definedCitizenshipOfUser}.`)
  } else {
    alert(`Desculpe, não sabemos de onde você é.`)
  }
}

function exercise_03() {
  const months = [
    'Janeiro',
    'Fevereiro',
    'Março',
    'Abril',
    'Maio',
    'Junho',
    'Julho',
    'Agosto',
    'Setembro',
    'Outubro',
    'Novembro',
    'Dezembro'
  ]

  const monthIndexInsertedByUser = Number(
    prompt('📆 Escolha um número de 1 a 12:')
  )

  for (let monthIndex in months) {
    let isTheRightMonth = (Number(monthIndex) + 1) === monthIndexInsertedByUser

    if (isTheRightMonth) {
      console.log(months[monthIndex])
      alert(`O número que você inseriu corresponde ao mês de ${months[monthIndex]}!`)

      break
    }
  }
}

function exercise_04() {
  const taxeIfValueSmallerThan20 = 0.30
  const taxeIfValueBiggerThan20 = 0.45
  let finalProductCost = 0

  const productCost = Number(
    prompt('💸 Quantos reais (R$) custará o produto?')
  )

  if (productCost < 20) {
    finalProductCost = productCost * (taxeIfValueSmallerThan20 + 1)
  } else {
    finalProductCost = productCost * (taxeIfValueBiggerThan20 + 1)
  }

  alert(`O valor final do produto será de R$ ${finalProductCost} 💲!`)
}

function exercise_05() {}

function exercise_06() {}

function exercise_07() {}

function exercise_08() {}

function exercise_09() {}
