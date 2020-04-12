/**
 * Às vezes atribuir valoresam determinados objetos pode ser um tanto cansativa, 
 * devido às variáveis serem iguais às propriedades do objeto. Mas pra isso, há 
 * uma solução rápida:
 */
const nome = 'Cristian';
const idade = 17;

// Ao invés de:
const usuario = {
  nome: nome,
  idade: idade,
  empresa: 'IFC'
};

const usuarioCorreto = {
  nome, 
  idade, 
  empresa: 'IFC'
};
/**
 * Já que a variável e a propriedade possuem o mesmo nome, é possível colocar 
 * apenas um deles, economizando assim espaço.
 */