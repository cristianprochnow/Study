// exercise #3
jQuery(document).ready(() => {
  // exercise #1
  $('div > h2').text('Show')

  // exercise #2
  $('div > p span').text('$100.00')

  // exercise #6
  const cities = [
    'Florianópolis, Santa Catarina',
    'Porto Alegre, Rio Grande do Sul',
    'Curitiba, Paraná',
    'Salvador, Bahia'
  ]
  $('#vacations li h2').map((index, element) => {
    $(element).text(cities[index])
  })

  // exercise #7
  $('#vacations li').map((_, listVacation) => {
    console.log(listVacation)
  })

  // exercise #8
  $('#vacations li.america h2').map((_, { textContent }) => {
    console.log(textContent)
  })
})
