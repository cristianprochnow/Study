const testNumbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20]

Promise.resolve()
  .then(() => exercise01(testNumbers))

function exercise01(numbers) {
  let evenNumbersAmount = 0,
    evenNumbersSum = 0,
    oddNumbers = []

  numbers.map(number => {
    let isEven = number % 2 === 0

    if (isEven) {
      evenNumbersSum += number
      evenNumbersAmount++
    } else {
      oddNumbers.push(number)
    }
  })

  console.table({
    oddNumbers: oddNumbers.join(', '),
    evenNumbersAverage: (Math.round(evenNumbersSum / evenNumbersAmount))
  })
}
