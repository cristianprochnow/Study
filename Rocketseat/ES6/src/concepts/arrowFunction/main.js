/**
 * As arrowFunctions são aquelas que às vezes aparecem 
 * assim: () => {}... São as chamadas funções anônimas, 
 * que não possuem nome, identidade ou alguma caracterização 
 * específica. Há certos detalhes e circunstâncias que possibilitam 
 * a extrema redução na formação do código.
 */

const randomArray = [1, 4, 7, 9, 2, -2];

const double = randomArray.map(function(item) {
  return item * 2;
})

console.log(double);

/**
 * Neste exemplo, temos duas circunstâncias que nos ajudam 
 * a reduzir o código:
 * 
 * 1. Há apenas um parâmetro na função.
 *  a. Por isso podemos tirar os parênteses ao redor 
 *  do parâmetrop e colocá-lo como uma palavra só.
 * 
 * 2. O processo todo possui apenas um linha, uma única 
 * requisição de processamento.
 *  a. Podemos então economizar as "{}" e também tirar 
 *  o "return", colocando o código diretamente.
 * 
 * Assim, o código ficará dessa forma:
 */

const shortDouble = randomArray.map(item => item * 2);

console.log(shortDouble);

/**
 * Ao invés de colocar "function nomeFuncao()", pode-se 
 * também colocar assim:
 */

const nomeFuncao = () => {}; // Mas não é indicado fazer isso

/**
 * Há um detalhe que tem que tomar cuidado...Quando a 
 * função retornar um objeto.
 */

const example = () => { nome: 'Cristian' };

console.log(example()); // undefined

/**
 * Quando ter que retornar um objeto, coloca-se o valor de 
 * "return" entre parênteses, ou seja:
 */

const correctExample = () => ({ nome: 'Cristian' });

console.log(correctExample());