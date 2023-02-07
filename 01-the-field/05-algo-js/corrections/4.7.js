
// Melih
const readlineSync = require("readline-sync");

let leftElevator = 0;
let rightElevator = 0;
let floor = 0;


function elevator(left, right, current){
    if(Math.abs(left - current) < Math.abs(right - current)){
        return "gauche";
    }  
    else {
        return "droite"
    }
}

 leftElevator= new Number(readlineSync.question("A quel étage se situe l'ascenceur de gauche ? "));
 rightElevator= new Number(readlineSync.question("A quel étage se situe l'ascenceur de droite ? "));
 floor= new Number(readlineSync.question("A quel étage vous situez vous ? "));

console.log("L'ascenceur de " + elevator(leftElevator, rightElevator, floor) + " va arriver !" );


//Lydia

/**
 *
 * @param {*} left
 * @param {*} right
 * @param {*} current
 * @returns
 */

function elevator(left, right, current) {
  let dist1 = Math.abs(current - left); // abs to keep number positive
  let dist2 = Math.abs(current - right);

  if (dist1 >= dist2) {
    return "right";
  }

  if (dist1 < dist2) {
    return "left";
  }
}

console.log(elevator(0, 1, 0)); // left
console.log(elevator(0, 1, 1)); // right
console.log(elevator(0, 1, 2)); // right
console.log(elevator(0, 0, 0)); // right
console.log(elevator(0, 2, 1)); // right