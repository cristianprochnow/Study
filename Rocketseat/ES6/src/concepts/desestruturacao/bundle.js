"use strict";

var user = {
  name: "Cristian",
  age: 17,
  adress: {
    city: "Joinville",
    state: "SC"
  }
};
/**
 * A primeira e mais fácil forma de extrair algum dado do objeto declarado 
 * anteriormente, é:
 * 
 * The first way to extract some object values is:
 */
// const name = user.name;
// const age = user.age;
// const city = user.adress.city;
// console.log(name, age, city);

/**
 * Porém, com isso gasta-se mais espaço e o processo se torna mais cansativo, 
 * tendo assim outra maneira de realizar este processo, usando assim a 
 * "desestruturação", por exemplo:
 * 
 * But, with "desestruturation", all the process becomes more easy. 
 * For example:
 */

/**
 * Já que "city" é uma propriedade de endereço, a instanciação tem que ser 
 * assim, como se fosse um objeto dentro do outro. Todo esse esquema funciona 
 * mais ou menos como o "extract()" lá do PHP.
 * 
 * Because "city" is a property of adress object, the instantiation must to 
 * happen like the example, as an object inside another one. All this scheme 
 * works more or less like PHP "extract()".
 */

var name = user.name,
    age = user.age,
    city = user.adress.city;
console.log(name, age, city);
/**
 * É possível também usar esse processo no parâmetro de uma função:
 * 
 * It's also possible use this process in the function parameter:
 */

function getNome(_ref) {
  var name = _ref.name;
  return name;
}

console.log(getNome(user));
