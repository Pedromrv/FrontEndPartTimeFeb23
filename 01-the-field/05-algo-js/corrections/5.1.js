const readlineSync = require("readline-sync");

const askTvSerie = () => {
    const tvshow = {};
    tvshow.name = readlineSync.question('Please enter the name of your favorite tv show : ');
    tvshow.year = readlineSync.question('In what year was it produced ? : ');
    tvshow.cast = [];
    let keepGoing = true;
    while (keepGoing) {
        let input = readlineSync.question('Please give me the cast (type stop to finish): ');
        input != "stop" ? tvshow.cast.push(input) : keepGoing = false;
    }
    return tvshow;
}
console.log(`Your favorite show object : ${JSON.stringify(askTvSerie())}`);