const usuarios = [
  { nome: 'Diego', idade: 23, empresa: 'Rocketseat' },
  { nome: 'Gabriel', idade: 15, empresa: 'Rocketseat' },
  { nome: 'Lucas', idade: 30, empresa: 'Facebook' },
];

// 2.1
const userAges = usuarios.map( (item) => item.idade );

console.log(userAges);

// 2.2
const adultUserAndYourBusiness = usuarios.filter(
  (item) => item.idade >= 18 && item.empresa === 'Rocketseat'
);

console.log(adultUserAndYourBusiness);

// 2.3
const googleEmployee = usuarios.find( (item) => item.empresa === 'Google' );

console.log(googleEmployee);

// 2.4
const oldUsers = usuarios.map( (item) => {
  /**
   * For each list item, the function will return a new object with age 
   * multiplicated by 2.
   */
  return {
    nome: item.nome,
    idade: item.idade * 2,
    empresa: item.empresa
  };
} );

const youngerThan50YearsOld = oldUsers.filter( item => item.idade <= 50 );

console.log(youngerThan50YearsOld);
