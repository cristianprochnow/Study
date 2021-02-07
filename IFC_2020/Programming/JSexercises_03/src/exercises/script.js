Promise.resolve()
  // .then(() => exercise_01())
  // .then(() => exercise_02())
  .then(() => exercise_03())

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

function exercise_03() {}

function exercise_04() {}

function exercise_05() {}

function exercise_06() {}

function exercise_07() {}

function exercise_08() {}

function exercise_09() {}
