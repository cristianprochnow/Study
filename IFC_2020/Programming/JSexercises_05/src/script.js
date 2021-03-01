const testNumbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20]

Promise.resolve()
  .then(() => exercise01(testNumbers))
  .then(() => exercise02(testNumbers))
  .then(exercise03)
  .then(() => exercise04(testNumbers))
  .then(() => exercise05(testNumbers))
  .then(exercise06)
  .then(exercise07)
  .then(exercise08)
  .then(exercise09)
  .then(exercise13)

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
  separateSections(4)

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
  separateSections(5)

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

function exercise06() {
  separateSections(6)

  let gastoTinta = 0.02, qtdTinta, qtdParcial, qtdTintaFinal, randomText;

  qtdTinta = prompt("Informe o quanto de tinta ainda tem em sua caneta (mL):");
  qtdTintaFinal =qtdTinta;

  do {
    qtdTinta = qtdTintaFinal;
    randomText = prompt("Enquanto tem tinta, a caneta escreve o quê?");

    qtdParcial = Number (qtdTinta * gastoTinta);

    qtdTintaFinal = Number (qtdTinta - qtdParcial);

    const qtdFinal = qtdTintaFinal.toFixed(2);

    const mensagemFinal = `Ainda resta ${qtdFinal} mL de tinta...`;

    alert(mensagemFinal)
  } while (qtdTintaFinal > 0)

  alert("Acabou a tinta da caneta!");
}

function exercise07() {
  let smallestHeight = 0,
    highestHeight = 0,
    sumHeight = 0,
    averageHeight = 0,
    timesHaveAsked = 0,
    hasGrantedContinuation = false,
    height = 0,
    highestID,
    smallestID,
    identity,
    isFirstRound = true;

  do {
    identity = Number(prompt("Digite seu número de inscrição"));
    height = Number(prompt("Digite sua altura"));

    timesHaveAsked++;
    sumHeight += height;

    if (isFirstRound) {
      smallestID = identity;
      highestID = identity;
      smallestHeight = height;
      highestHeight = height;
      isFirstRound = false;
    }

    if (height > highestHeight) {
      highestHeight = height;
      highestID = identity;
    } else if (height < smallestHeight) {
      smallestHeight = height;
      smallestID = identity;
    }

    hasGrantedContinuation = prompt("Deseja continuar? [S]im ou [N]ão") !== "N" ? true : false;
  } while (hasGrantedContinuation);

  averageHeight = sumHeight / timesHaveAsked;

  alert(`O atleta cujo número de inscrição é ${smallestID}, possui a menor altura (${smallestHeight})`);
  alert(`O atleta cujo número de inscrição é ${highestID}, possui a maior altura (${highestHeight})`);
  alert(`A média das ALTURAS é ${averageHeight.toFixed(2)}`);
}

function exercise08() {
  let nome,
    idade,
    i,
    contador = 0,
    contadorFim = 0,
    nomeRaiz = [];

  for (i = 1; i <= 50; i++) {
    contador = contadorFim;

    nome = prompt("Informe seu nome:")
    idade = prompt("Informe sua idade:")

    if (idade == 18){
      nomeRaiz.push(nome);
    }

    if (idade>20) {
      contadorFim = contador + 1;
    }
  }

  const mensagemFinal1 = `${nomeRaiz} são os alunos com 18 anos.`;
  alert(mensagemFinal1);

  const mensagemFinal2 = `Há ${contadorFim} alunos com mais de 20 anos.`;
  alert(mensagemFinal2);
}

function exercise09() {
  separateSections(9)

  let calculations = [],
    actualIndex = 0

  for (let counter = 1; counter <= 5; counter += 0.1) {
    actualIndex = Number(counter.toFixed(1))

    calculations.push({
      counter: actualIndex,
      result: (
        (3 + (2 * actualIndex) + ((6 * actualIndex) ** 2))
        /
        ((1 + (9 * actualIndex) + ((16 * actualIndex) ** 2)))
      ).toFixed(5),
      structure: `
        (3 + 2(${actualIndex}) + 6(${actualIndex})^2)/(1 + 9(${actualIndex}) + 16(${actualIndex})^2)
      `
    })
  }

  console.log(calculations)
}

function exercise_10(){
  separateSections(10)

  let counter = 1,
  hasFinished = false,
  number = 0,
  minNumber = 0,
  maxNumber = 0,
  isFirstRound = true

  do {
      number = Number(prompt(`Qual número você quer adicionar para a sequência!`))

      counter ++

      if (number === 0) {
          hasFinished = true
      }
      if (isFirstRound) {
          minNumber = number
          maxNumber = number
          isFirstRound = false
      }
      if (number > maxNumber && number !== 0) {
          maxNumber = number
      } else if (number < minNumber && number !== 0) {
          minNumber = number
      }
  } while (!hasFinished)

  alert(`max number = ${maxNumber} | min number = ${minNumber} `)
}

function exercise_11(){
  separateSections(11)

  let numberSum = 0,
  numbersArray = []

  for(let counter = 1; counter<=100; counter++){
      numberSum += counter
      numbersArray.push(counter)
  }
  alert(`NumberSum = ${numberSum}`)
  alert(`${numbersArray.join(' + ')}`)
}

function exercise_12(){
  separateSections(12)

  let numberSum = 0,
  numbersArray = []

  for(let counter = 1; counter<=100; counter++){
      numberSum += 1/counter
      numbersArray.push(`1/${counter}`)
  }
  alert(`NumberSum = ${numberSum.toFixed(2)}`)
  alert(`${numbersArray.join(' + ')}`)
}

function exercise13() {
  separateSections(13)

  const calculations = []
  let calcResult = 0,
    secondCounter = 0

  const limitNumber = Number(prompt('Defina um valor numérico positivo para N:'))

  secondCounter = limitNumber

  for (let counter = 1; counter <= limitNumber; counter++) {
    calcResult += counter / secondCounter

    calculations.push(`${counter}/${secondCounter}`)

    secondCounter--
  }

  alert(`Resultado do cálculo: ${calcResult}`)
  alert(`Cálculo: [${calculations.join(' + ')}]`)
}
