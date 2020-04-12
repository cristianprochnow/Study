/**
 * Some functions can have default values in your parameters
 * to prevent possible bugs or indetermined results.
 */
function sumWithoutDefaultValue(a, b) {
  return a + b;
}

function sumWithDefaultValue(a = 2, b = 3) {
  return a + b;
}

console.log(sumWithoutDefaultValue()); // Nan
console.log(sumWithoutDefaultValue(1)); // Nan
console.log(sumWithDefaultValue()); // 5
console.log(sumWithDefaultValue(1)); // 4
console.log(sumWithDefaultValue(1, 2)); // 3