"use strict";

/**
 * Em muitos momentos há a obrigação de realizar a concatenação de strings e 
 * assim a sintaxe acaba ficando "feia", por isso o "template literals", do ES6, 
 * resolve esse problema.
 */
var nome = "Cristian";
var idade = 17; // Ao invés disso:

console.log('Meu nome é ' + nome + ' e tenho ' + idade + ' anos.'); // É possível fazer isso:

console.log("Meu nome \xE9 ".concat(nome, " e tenho ").concat(idade, " anos."));
/**
 * Ou seja, substitue as aspas/apóstrofos por crases, e ao redor das variáveis, 
 * coloca chaves e um cifrão.
 */
