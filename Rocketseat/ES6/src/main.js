/**
 * There are two types of "exports". The first functionality is when a file has 
 * more than one export, using the import with "{}", like the { sum } example, 
 * that "sum" is an exported function or variable from other file. And, also there 
 * are "export default", in which each file must have only one "export default",
 * but also can have several others normal "exports". Only detail of this operation 
 * is that importing code will be necessary to use both Sum (export default function sum() {})
 * and { sum } (export function sum() {}) on importing.

 * "import sum from './sum'" 
 * (".js" isn't required, since has been configured on webpack file).
 * 
 * "import sum, { sum } from './functions';"
 */
/**
 * In importing of files which have "export default" tag, the functionality can 
 * be renamed, for example (following the code below):
 * 
 * import sumFunctionality from './sum';
 * 
 * Lastly, it's possible renameation in importing with "{}". Just using "as" tag. 
 * For example: 
 * 
 * import { sub as subFunctionOfExample } from './functions';
 */
// import { sub } from '../functions';
// import sum from '../sum';

/**
 * If you don't want to name each functionality in importing, there is an 
 * alterative. Use "*", like the SQL, renaming as you want and then make reference 
 * of this property
 */
// import * as functions from '../functions';

// console.log(functions.sub(1, 2));


// Webpack exercises.
// import ClasseUsuario, { idade } from './functions';
import Usuario, {idade as idadeUsuario} from './functions';

Usuario.info();

console.log(idadeUsuario);


// ======================ASYNC/AWAIT===========================

import {
  myPromise, 
  promiseExecutor, 
  otherPromiseExecutor
} from './async-await';


myPromise()
  .then( (response) => { console.log(response) } );

promiseExecutor();

otherPromiseExecutor();
