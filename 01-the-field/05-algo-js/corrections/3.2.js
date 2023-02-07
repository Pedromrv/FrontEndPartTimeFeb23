const test1 = [1, 2, 3, 4, 5]
const test2 = [100, 101, 102]

// Henri
var total = 0

for(let i = 0; i < test2.length ; i++) {
    total = total + test2[i]
}
total = total / test2.length
console.log(total)



// Marlène

let sum = test1.reduce( (previousValue, currentValue) => {
    return previousValue + currentValue }, 0 )
sum = sum / test1.length
console.log(sum)