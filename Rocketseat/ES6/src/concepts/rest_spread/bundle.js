"use strict";

function ownKeys(object, enumerableOnly) { var keys = Object.keys(object); if (Object.getOwnPropertySymbols) { var symbols = Object.getOwnPropertySymbols(object); if (enumerableOnly) symbols = symbols.filter(function (sym) { return Object.getOwnPropertyDescriptor(object, sym).enumerable; }); keys.push.apply(keys, symbols); } return keys; }

function _objectSpread(target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i] != null ? arguments[i] : {}; if (i % 2) { ownKeys(Object(source), true).forEach(function (key) { _defineProperty(target, key, source[key]); }); } else if (Object.getOwnPropertyDescriptors) { Object.defineProperties(target, Object.getOwnPropertyDescriptors(source)); } else { ownKeys(Object(source)).forEach(function (key) { Object.defineProperty(target, key, Object.getOwnPropertyDescriptor(source, key)); }); } } return target; }

function _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }

function _objectWithoutProperties(source, excluded) { if (source == null) return {}; var target = _objectWithoutPropertiesLoose(source, excluded); var key, i; if (Object.getOwnPropertySymbols) { var sourceSymbolKeys = Object.getOwnPropertySymbols(source); for (i = 0; i < sourceSymbolKeys.length; i++) { key = sourceSymbolKeys[i]; if (excluded.indexOf(key) >= 0) continue; if (!Object.prototype.propertyIsEnumerable.call(source, key)) continue; target[key] = source[key]; } } return target; }

function _objectWithoutPropertiesLoose(source, excluded) { if (source == null) return {}; var target = {}; var sourceKeys = Object.keys(source); var key, i; for (i = 0; i < sourceKeys.length; i++) { key = sourceKeys[i]; if (excluded.indexOf(key) >= 0) continue; target[key] = source[key]; } return target; }

// REST -> Serve para pegar o "resto" das propriedades, ou seja, o que sobra 
// quando já se tirou o que deseja, que são os valores das variáveis destacadas.
var user = {
  name: 'Cristian',
  age: 17,
  empresa: 'IFC'
};

var name = user.name,
    rest = _objectWithoutProperties(user, ["name"]);

console.log(name, rest);
/**
 * Quando se trata de objeto, a desestruturação funciona com "{}". Mas é também 
 * possível fazer o mesmo processo com array, por exemplo, mas usando "[]".
 */

var numbers = [1, 2, 3, 4];
/**
 * Para definição do campo escolhido não se usa o nome da propriedade, neste 
 * caso usa-se alguma variável no índice desejado (x = 1, y = 2).
 */

var x = numbers[0],
    y = numbers[1],
    z = numbers.slice(2);
console.log(x, y, z);
/**
 * O resto pode ser usado também em funções, como forma de parâmetro. Ao invés 
 * de, toda vez que for necessário, configurar a função com mais um parâmetro, 
 * basta apenas colocar o "rest" como parâmetro e assim pode-se colocar quantos 
 * valores desejar na chamada da função, como argumento.
 */
// ...params vai formar uma array com todos os valores colocoados como argumento

function soma() {
  for (var _len = arguments.length, params = new Array(_len), _key = 0; _key < _len; _key++) {
    params[_key] = arguments[_key];
  }

  return params.reduce(function (index, next) {
    return index + next;
  });
}

console.log(soma(1, 2, 3, 4)); // SPREAD -> Sua principal função é juntar conteúdos ou também, em certos casos, 
// é usada para pegar uma parte do conteúdo, sobrescrevendo a que não foi dita. 
// Geralmente esse último tópico é mais usado em objetos.
// Arrays.

var arr1 = [1, 2, 3];
var arr2 = [4, 5, 6];
var arr3 = [].concat(arr1, arr2);
console.log(arr3); // Objects

var user1 = {
  name: 'Cristian',
  age: 17
};

var user2 = _objectSpread({}, user1, {
  name: 'Prochnow'
});

console.log(user1);
console.log(user2);
