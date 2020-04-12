const array = [1, 2, 3, 4, 5, 6];

/**
 * no ES6, há certas funções que nos ajudam a 
 * percorrer vetores ou fazer qualquer outra 
 * coisa, de uma forma muito mais fácil que 
 * usar um "for" por exemplo
 */

/**
 * nesta função "map", toda a array é percorrida, 
 * e assim forma-se uma nova array no final, resultado 
 * da operação que tenha sido declarada como argumento 
 * na chamada da função
 */
/**
 * neste exemplo, foi usado uma função como argumento 
 * de "map" e assim passado dois parâmetros, "item" 
 * que é cada item desta array (1, 2, 3, 4, 5, 6) 
 * e "index" é o índice de cada item da array. Eles 
 * não precisam ter necessariamente esse nome, porém 
 * sua posição como parâmetro tem que ser exatamente 
 * a do exemplo
 */
/**
 * neste exemplo, a função recebe como valor uma 
 * array de comprimento indeterminado e retorna o 
 * valor que é o resultado da operação de cada 
 * valor da array subtraído pelo seu índice na array
 */
const arrayTest = array.map(function(item, index) {
  return item - index;
});

console.log(arrayTest);

/**
 * o papel do reduce já é um pouco diferente. Enquanto no 
 * anterior pode-se pegar o valor em específico de cada item, 
 * aqui é um pouco diferente. Por exemplo, vamos levar em 
 * em conta o exemplo de uma função de soma, que nem está aqui 
 * explicitado.
 */
/**
 * @param {é o valor que a função retorna a cada item da array percorrida} total
 * @param {é o valor que está no índice que procede o item em questão, no momento} next
 * 
 * essa função recebe como valor cada item da array 
 * especificada. Ela acumula sempre as somas de cada 
 * número para assim, no final, dar um valor igual à 
 * soma de todos os elementos da array. Ao contrário 
 * de map, a reduce retorna apenas um valor total, 
 * sem estar no formato de array, ou seja, ela 
 * reduz ("reduce") uma array a um único valor total
 */
const sum = array.reduce(function(total, next) {
  return total + next;
});

console.log(sum);
/**
 * Resultado: 21 ->
 * ((((((0+1)+2)+3)+4)+5)+6) === 21
 */


/**
 * outra função muito prática é a de "filter". 
 * Conforme o próprio nome já diz, ela fica responsável 
 * por filtrar o conteúdo do vetor que atenda à condicional 
 * apresentada
 */

/**
 * a função recebe como valor a array de números e 
 * retorna aqueles que são pares, já que "filter" 
 * vai retornar "false" para aqueles que não atenderem 
 * à condição. É como se a função filter fosse um IF 
 * mais prático
 */
const evenNumbers = array.filter(function(number) {
  return number % 2 === 0;
});

console.log(evenNumbers); // [2, 4, 6]


/**
 * há também outra função, no mesmo esquema da filter, 
 * porém serve para encontrar algum item específico 
 * da array (find())
 */
const findValue = array.find(function(number) {
  return number === 9;
}); // undefined

const findOtherValue = array.find(function(number) {
  return number === 6;
}); // 6 (retorna o própio item que foi solitado e achado)

console.log(findValue, findOtherValue);