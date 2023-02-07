const readlineSync = require("readline-sync");

const askTvSerie = () => {
    const tvSerie = {};
    tvSerie.name = readlineSync.question('Please enter the name of your favorite tv show : ');
    tvSerie.year = readlineSync.question('In what year was it produced ? : ');
    tvSerie.cast = [];
    let keepGoing = true;
    while (keepGoing) {
        let input = readlineSync.question('Please give me the cast (type stop to finish): ');
        input != "stop" ? tvSerie.cast.push(input) : keepGoing = false;
    }
    return tvSerie;
}

const randomGenerator = (n) => {
    return Math.floor(Math.random() * n )
}

// Create a program that will use randomizeCast(tvSerie) and askTvSerie() to ask the user about a TV serie 
// then display a randomized list of the previous cast that will form the new cast of your next serie.
const randomizeCast = (tvSerie) => {
    // https://bost.ocks.org/mike/shuffle/
    let numberOfCharacters = tvSerie.cast.length, t
    const newCast = tvSerie.cast
    while( numberOfCharacters != 0) {
        let randomIndex = randomGenerator(numberOfCharacters--);
        t = newCast[numberOfCharacters]
        newCast[numberOfCharacters] = newCast[randomIndex]
        newCast[randomIndex] = t
    }
    
    return newCast
}

const tvshow = askTvSerie();
console.log(`Your favorite show object : ${JSON.stringify(tvshow)}`);
console.log(`And here's a random cast with the current cast: ${randomizeCast(tvshow)}`);
