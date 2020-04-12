// REST -> Serve para pegar o "resto" das propriedades, ou seja, o que sobra 
// quando já se tirou o que deseja, que são os valores das variáveis destacadas.

const user = {
  name: 'Cristian',
  age: 17,
  empresa: 'IFC'
};

const {name, ...rest} = user;

console.log(name, rest);

/**
 * Quando se trata de objeto, a desestruturação funciona com "{}". Mas é também 
 * possível fazer o mesmo processo com array, por exemplo, mas usando "[]".
 */
const numbers = [1, 2, 3, 4];

/**
 * Para definição do campo escolhido não se usa o nome da propriedade, neste 
 * caso usa-se alguma variável no índice desejado (x = 1, y = 2).
 */
const [x, y, ...z] = numbers;

console.log(x, y, z);

/**
 * O resto pode ser usado também em funções, como forma de parâmetro. Ao invés 
 * de, toda vez que for necessário, configurar a função com mais um parâmetro, 
 * basta apenas colocar o "rest" como parâmetro e assim pode-se colocar quantos 
 * valores desejar na chamada da função, como argumento.
 */
// ...params vai formar uma array com todos os valores colocoados como argumento
function soma(...params) {
  return params.reduce(
    (index, next) => index + next
  );
}

console.log(soma(1, 2, 3, 4));

// SPREAD -> Sua principal função é juntar conteúdos ou também, em certos casos, 
// é usada para pegar uma parte do conteúdo, sobrescrevendo a que não foi dita. 
// Geralmente esse último tópico é mais usado em objetos.

// Arrays.
const arr1 = [1, 2, 3];
const arr2 = [4, 5, 6];

const arr3 = [...arr1, ...arr2];
console.log(arr3);

// Objects
const user1 = {
  name: 'Cristian',
  age: 17
};

const user2 = {
  ...user1,
  name: 'Prochnow'
};

console.log(user1);
console.log(user2);