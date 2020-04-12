"use strict";

/**
 * constantes são valores que não podem ser 
 * novamente referenciados com outro valor, 
 * conforme seu próprio nome diz, são constantes, 
 * ou seja, invariáveis
 */
// const usuario = 1;
// usuario = 3; // vai dar erro, pois o valor é imutável

/**
 * o que é permitido é mexer nas propriedades de um 
 * valor, quando se define ele como "const", porém não 
 * em seu tipo ou então valor como um total. Por exemplo:
 */
var usuario = {
  nome: "Cristian"
};
usuario.nome = "Felizclevilson";
console.log(usuario); // Felizclevilson

/**
 * neste exemplo, apenas mudamos uma característica 
 * do valor total, que continuou sendo um objeto com 
 * propriedade "nome" que possui algum valor aleatório
 */

/**
 * em relação ao "let", o assunto é um pouco diferente. 
 * Ele é tipo uma variável, porém, seu alcance é limitado 
 * pelo escopo ("{}") em que está mantido
 */

function soma(x) {
  /**
   * escopo se refere às chaves de alguma função, 
   * condicional etc. Ou seja, fora dessa função 
   * do exemplo, a variável "y" não existe
   */
  var y = 2;
  console.log(x, y);
}

soma(10);
