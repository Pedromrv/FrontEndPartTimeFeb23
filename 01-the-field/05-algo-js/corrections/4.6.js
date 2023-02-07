// Lydia

const readlineSync = require("readline-sync");

/**
 *
 * @param {*} a
 * @returns
 */

function factorial(a) {
  if (a < 0) return -1;
  else if (a == 0) return 1;
  else {
    return a * factorial(a - 1);
  }
}

console.log(factorial(5));