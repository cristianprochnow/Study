"use strict";

// 4.1
var empresa = {
  nome: 'Rocketseat',
  endereco: {
    cidade: 'Rio do Sul',
    estado: 'SC'
  }
};
var nome = empresa.nome,
    _empresa$endereco = empresa.endereco,
    cidade = _empresa$endereco.cidade,
    estado = _empresa$endereco.estado;
console.log(nome, cidade, estado); // 4.2
// function mostraInfo(usuario) {
//   return `${usuario.nome} tem ${usuario.idade} anos.`;
// }
// mostraInfo({ nome: 'Diego', idade: 23 });

function mostraInfo(_ref) {
  var nome = _ref.nome,
      idade = _ref.idade;
  return "".concat(nome, " tem ").concat(idade, " anos.");
}

mostraInfo({
  nome: 'Cristian',
  idade: 17
});
