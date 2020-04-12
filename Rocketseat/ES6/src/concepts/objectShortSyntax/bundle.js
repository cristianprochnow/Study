"use strict";

/**
 * Às vezes atribuir valoresam determinados objetos pode ser um tanto cansativa, 
 * devido às variáveis serem iguais às propriedades do objeto. Mas pra isso, há 
 * uma solução rápida:
 */
var nome = 'Cristian';
var idade = 17; // Ao invés de:

var usuario = {
  nome: nome,
  idade: idade,
  empresa: 'IFC'
};
var usuarioCorreto = {
  nome: nome,
  idade: idade,
  empresa: 'IFC'
};
/**
 * Já que a variável e a propriedade possuem o mesmo nome, é possível colocar 
 * apenas um deles, economizando assim espaço.
 */
