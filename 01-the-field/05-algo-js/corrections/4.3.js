// Louis
const readlineSync = require("readline-sync");
const userNumber = new Number(readlineSync.question("Can you give me a number please?"));

const rand10 = () => {
	let randomNumber = Math.floor(Math.random() * 11);
	return randomNumber;
};

const multiRand = (userNumber) => {
	let arrayRandom = [0];
	for (let i = 0; i < userNumber; i++) {
		arrayRandom[i] = rand10();
	}
	return arrayRandom;
};

console.log(multiRand(userNumber));