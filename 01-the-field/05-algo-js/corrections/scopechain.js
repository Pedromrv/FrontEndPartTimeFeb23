let firstName = "Mary Lou"

const sayHi = () => {
    const hi = "Hi"

    const welcome = () => {
        const team = "team"
        console.log(team)
        return `${hi} ${firstName}, welcome to the ${team}!`
    }

    return welcome()
} 

console.log(sayHi())