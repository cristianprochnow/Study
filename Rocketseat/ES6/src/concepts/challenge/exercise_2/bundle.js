"use strict";

var usuarios = [{
  nome: 'Diego',
  idade: 23,
  empresa: 'Rocketseat'
}, {
  nome: 'Gabriel',
  idade: 15,
  empresa: 'Rocketseat'
}, {
  nome: 'Lucas',
  idade: 30,
  empresa: 'Facebook'
}]; // 2.1

var userAges = usuarios.map(function (item) {
  return item.idade;
});
console.log(userAges); // 2.2

var adultUserAndYourBusiness = usuarios.filter(function (item) {
  return item.idade >= 18 && item.empresa === 'Rocketseat';
});
console.log(adultUserAndYourBusiness); // 2.3

var googleEmployee = usuarios.find(function (item) {
  return item.empresa === 'Google';
});
console.log(googleEmployee); // 2.4

var oldUsers = usuarios.map(function (item) {
  /**
   * For each list item, the function will return a new object with age 
   * multiplicated by 2.
   */
  return {
    nome: item.nome,
    idade: item.idade * 2,
    empresa: item.empresa
  };
});
var youngerThan50YearsOld = oldUsers.filter(function (item) {
  return item.idade <= 50;
});
console.log(youngerThan50YearsOld);
