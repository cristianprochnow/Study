Promise.resolve()
  // .then(exercise_01)
  // .then(exercise_02)
  // .then(exercise_03)
  // .then(exercise_04)
  // .then(exercise_05)
  // .then(exercise_06)
  // .then(exercise_07)
  // .then(exercise_08)
  .then(exercise_09)

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

function exercise_05() {
  const firstGrade = Number(prompt('🎓 Digite a primeira nota (substitua vírgulas por pontos):'))
  const secondGrade = Number(prompt('🎓 Digite a segunda nota (substitua vírgulas por pontos):'))
  const averageScoreFromGrades = ((firstGrade + secondGrade) / 2)
  let concept = '', isApproved = false

  if (averageScoreFromGrades < 4) {
    concept = 'E'
    isApproved = false
  } else if (averageScoreFromGrades >= 4 && averageScoreFromGrades <= 6) {
    concept = 'D'
    isApproved = false
  } else if (averageScoreFromGrades >= 6 && averageScoreFromGrades <= 7.5) {
    concept = 'C'
    isApproved = false
  } else if (averageScoreFromGrades >= 7.5 && averageScoreFromGrades <= 9) {
    concept = 'B'
    isApproved = true
  } else {
    concept = 'A'
    isApproved = true
  }

  const data = {
    firstGrade,
    secondGrade,
    averageGrade: averageScoreFromGrades,
    concept,
    schoolSituation: isApproved ? 'APROVADO' : 'REPROVADO'
  }

  alert(`Primeira nota: ${data.firstGrade}`)
  alert(`Segunda nota: ${data.secondGrade}`)
  alert(`Média final: ${data.averageGrade}`)
  alert(`Conceito que você se encaixa: ${data.concept}`)
  alert(`Você foi ${data.schoolSituation}!`)
}

function exercise_06() {
  const taxesToIncreaseIntoRendiment = [
    0.15,
    0.12,
    0.10,
    0.07,
    0.04
  ]
  let finalSalaryWithIncrements = 0, taxeForWorkerSalary = 0

  const workSalary = Number(
    prompt('Quantos reais (R$) você ganha por mês? (substitua vírgula por ponto)')
  )

  if (workSalary <= 400) {
    finalSalaryWithIncrements = workSalary * (taxesToIncreaseIntoRendiment[0] + 1)
    taxeForWorkerSalary = taxesToIncreaseIntoRendiment[0]
  } else if (workSalary < 400 && workSalary <= 700) {
    finalSalaryWithIncrements = workSalary * (taxesToIncreaseIntoRendiment[1] + 1)
    taxeForWorkerSalary = taxesToIncreaseIntoRendiment[1]
  } else if (workSalary < 700 && workSalary <= 1000) {
    finalSalaryWithIncrements = workSalary * (taxesToIncreaseIntoRendiment[2] + 1)
    taxeForWorkerSalary = taxesToIncreaseIntoRendiment[2]
  } else if (workSalary < 1000 && workSalary <= 1500) {
    finalSalaryWithIncrements = workSalary * (taxesToIncreaseIntoRendiment[3] + 1)
    taxeForWorkerSalary = taxesToIncreaseIntoRendiment[3]
  } else if (workSalary < 1500 && workSalary <= 2000) {
    finalSalaryWithIncrements = workSalary * (taxesToIncreaseIntoRendiment[4] + 1)
    taxeForWorkerSalary = taxesToIncreaseIntoRendiment[4]
  } else {
    finalSalaryWithIncrements = 'N/D'
    taxeForWorkerSalary = 'N/D'
  }

  alert(`Com uma taxa de aumento de ${taxeForWorkerSalary * 100}%, seu salário final será de R$ ${Math.round(finalSalaryWithIncrements)}.`)
}

function exercise_07() {
  const digitOptionForCalculating = Number(
    prompt('Digite um número de 0 a 4:')
  )
  const firstNumber = Number(
    prompt('Digite o primeiro número:')
  )
  const secondNumber = Number(
    prompt('Digite o segundo número:')
  )

  let result

  switch (digitOptionForCalculating) {
    case 0:
      result = firstNumber + secondNumber
      break;
    case 1:
      result = firstNumber - secondNumber
      break;
    case 2:
      result = firstNumber * secondNumber
      break;
    case 3:
      result = firstNumber / secondNumber
      break;
    case 4:
      result = (firstNumber + secondNumber) / 2
      break;
    default:
      result = 'Valor errado. Programa encerrado sem cálculo.'
      break;
  }

  alert(`O resultado de sua conta foi:`)
  alert(result)
}

function exercise_08() {
  const firstNumber = Number(
    prompt('Digite o primeiro número:')
  )
  const secondNumber = Number(
    prompt('Digite o segundo número:')
  )

  const restOfDivision = firstNumber % secondNumber

  let result = 0

  switch (restOfDivision) {
    case 1:
      result = firstNumber + secondNumber
      alert(`A soma dos dois números é ${result}`)

      bonusMessage = `Resto da divisão: ${restOfDivision}`
      alert(bonusMessage)

      break;
    case 2:
      function isEven(number) {
        const isEven = number % 2 === 0

        return isEven
      }

      alert(`O primeiro número é ${isEven(firstNumber) ? 'par' : 'ímpar'}.`)
      alert(`O segundo número é ${isEven(secondNumber) ? 'par' : 'ímpar'}.`)

      break;
    case 3:
      result = (firstNumber + secondNumber) * firstNumber

      alert(`O resultado da operação é igual a ${result}`)

      break;
    case 4:
      if (secondNumber !== 0) {
        result = (firstNumber + secondNumber) / secondNumber

        alert(`O resultado da operação é ${result}.`)
      } else {
        result = firstNumber ** 2
        alert(`O quadrado do primeiro número é ${firstNumber}.`)

        result = secondNumber ** 2
        alert(`O quadrado do segundo número é ${secondNumber}.`)
      }

      break;

    default:
      alert('Valor inválido. Parabéns! 👏🏼')

      break;
  }
}

function exercise_09() {
  const firstManAge = Number(
    prompt('Digite a idade do primeiro homem:')
  )
  const secondManAge = Number(
    prompt('Digite a idade do segundo homem:')
  )
  const firstWomanAge = Number(
    prompt('Digite a idade da primeira mulher:')
  )
  const secondWomanAge = Number(
    prompt('Digite a idade da segunda mulher:')
  )

  let olderMan,
    newerMan,
    olderWoman,
    newerWoman,
    sumResult,
    multiplicationResult

  if (firstManAge > secondManAge) {
    olderMan = firstManAge
    newerMan = secondManAge
  } else {
    olderMan = secondManAge
    newerMan = firstManAge
  }

  if (firstWomanAge > secondWomanAge) {
    olderWoman = firstWomanAge
    newerWoman = secondWomanAge
  } else {
    olderWoman = secondWomanAge
    newerWoman = firstWomanAge
  }

  sumResult = olderMan + newerWoman
  multiplicationResult = newerMan * olderWoman

  alert(`Soma das idades do homem mais velho com a mulher mais nova: ${sumResult}`)
  alert(`Produto das idades do homem mais novo com a mulher mais velha: ${multiplicationResult}`)
}
