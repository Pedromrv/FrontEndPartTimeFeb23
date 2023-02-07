// Anaïs
const readlineSync = require("readline-sync");

function average(arr) {
    let sum = 0;
    let ave = 0;
    for (let element of arr ){
        sum += element;
    }
    ave = sum / arr.length;
    return ave;
}

function min(arr) {
    let arrMin = Math.min(...arr);
    return arrMin;
}

function max(arr) {
    let arrMax = Math.max(...arr);
    return arrMax;
}


function rand10(){
    let randomNumber = Math.floor((Math.random() * 10) + 1);
    return randomNumber;
}
function multiRand(n) {
    let arrayRandomNumber = [];
    for (let i = 0; i < n;  i++) {
        arrayRandomNumber.push(rand10());
    }
    return arrayRandomNumber;
}

function main() {
    let arrayLength = readlineSync.question('Can you give me a number?');
    let arrayRandom = multiRand(arrayLength);
    let a = average(arrayRandom);
    let mi = min(arrayRandom);
    let ma = max(arrayRandom);
    console.log(arrayRandom, a, mi, ma);
}