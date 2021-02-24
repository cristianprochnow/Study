const testNumbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20]

Promise.resolve()
  // .then(() => exercise01(testNumbers))
  // .then(() => exercise02(testNumbers))
  // .then(exercise03)
  // .then(() => exercise04(testNumbers))
  .then(() => exercise05(testNumbers))

function separateSections(exerciseNumber) {
  console.warn(`Exercise #${exerciseNumber}`)
}

function exercise01(numbers) {
  separateSections(1)

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

function exercise02(numbers) {
  separateSections(2)

  numbers.map(number => {
    if (number % 2 === 0) {
      console.log({ evenNumber: number })
    } else {
      console.log({ oddNumber: number })
    }
  })
}

function exercise03() {
  separateSections(3)

  let evenSum = 0,
    oddSum = 0

  for (let counter = 1; counter <= 100; counter++) {
    if (counter % 2 === 0) {
      evenSum += counter
    } else {
      oddSum += counter
    }
  }

  console.table({
    oddNumbersSum: oddSum,
    evenNumbersSum: evenSum
  })
}

function exercise04(numbers) {
  let ageSum = 0,
    ageAmount = 20

  numbers.map(number => {
    ageSum += number
  })

  console.table({
    ageAverage: ageSum / ageAmount
  })
}

function exercise05(numbers) {
  let negativeNumbersAmount = 0

  numbers.map(number => {
    if (number < 0) {
      negativeNumbersAmount++
    }
  })

  console.table({
    negativeNumbersAmount
  })
}
