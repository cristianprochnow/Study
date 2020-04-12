"use strict";

/**
 * Some functions can have default values in your parameters
 * to prevent possible bugs or indetermined results.
 */
function sumWithoutDefaultValue(a, b) {
  return a + b;
}

function sumWithDefaultValue() {
  var a = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : 2;
  var b = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : 3;
  return a + b;
}

console.log(sumWithoutDefaultValue()); // Nan

console.log(sumWithoutDefaultValue(1)); // Nan

console.log(sumWithDefaultValue()); // 5

console.log(sumWithDefaultValue(1)); // 4

console.log(sumWithDefaultValue(1, 2)); // 3
