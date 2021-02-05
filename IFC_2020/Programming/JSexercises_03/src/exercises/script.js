Promise.resolve()
  .then(() => exercise_01())

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

function exercise_02() {}

function exercise_03() {}

function exercise_04() {}

function exercise_05() {}

function exercise_06() {}

function exercise_07() {}

function exercise_08() {}

function exercise_09() {}
