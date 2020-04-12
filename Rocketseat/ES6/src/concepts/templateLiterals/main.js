/**
 * Em muitos momentos há a obrigação de realizar a concatenação de strings e 
 * assim a sintaxe acaba ficando "feia", por isso o "template literals", do ES6, 
 * resolve esse problema.
 */

const nome = "Cristian";
const idade = 17;

// Ao invés disso:
console.log('Meu nome é ' + nome + ' e tenho ' + idade + ' anos.');

// É possível fazer isso:
console.log(`Meu nome é ${nome} e tenho ${idade} anos.`);
/**
 * Ou seja, substitue as aspas/apóstrofos por crases, e ao redor das variáveis, 
 * coloca chaves e um cifrão.
 */