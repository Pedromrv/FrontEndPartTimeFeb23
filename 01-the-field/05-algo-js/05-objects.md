
# Algorithmics with JavaScript 05 - Objects

Objects are some other type of data structure in JavaScript.

## Theory

### Definition 

Objects are collection of name value pairs. 
That means there are collections of values that are given a name. 

### Property or key

At the very base they are quite a simple structure like arrays. Instead of assigning an index to each element they allow to assign them to a string. That string will be called the *key* or *property* and its associated value will be the... value.

```javascript
let myObject = {
  // we can use the "" notation for the key
  "firstname": "Gerard",
  // ... or just specify it this way if we want
  name: "Lambert",
  // we can use any type for the value
  age: 42
};

// we can use the [] notation to access values
console.log(myObject["age"]); // 25

// ... or the . notation
console.log(myObject.firstname); // Gerard

// we can assign a new value
myObject.age = 54;

// ... and there's a special keyword to delete keys
delete myObject["name"];

console.log(myObject); // {firstname: "Gerard", age: 54}
```

### Objects and Arrays as Tools for Data Structures

By combining objects, arrays and a few simple types we can represent complex data structures suitable to represent most type of data.

```javascript
{
  "firstname": "Gerard",
  "lastname": "Lambert",
  "age": 42,
  "skills": [
    {
      "skillName": "JavaScript",
      "level": "advanced"
    },
    {
      "skillName": "HTML",
      "level": "advanced"
    }
  ],
  "address": {
    "street": "rue des Campanules",
    "number": "10",
    "city": "Paris",
    "zip": 1000
  }
}
```

This also form the basis of [JSON](https://en.wikipedia.org/wiki/JSON), a data format inspired by JavaScript which is used in almost every programming language nowadays.

### Functions = methods

Objects can also collect functions and in those cases they are called *methods*. 

There are still functions but connected to an object. 

Example:
```javascript
const car = {
  color,
  speed,
  go(sound){                     //the method declaration
    return sound;
  }
};

console.log( car.go("vroom") ); // "vroom"
```

### ES6: Shorthand properties

Shorthand properties allow you to compose complex objects from other objects.
This syntax allows you to easily push properties in a object. It's like destructuring backwards.

```javascript
let firstName = "Tyler";
let lastName = "Durden";

let person = {firstName, lastName}

console.log(person); //{firstName: 'Tyler', lastName: 'Durden'}
```

### ES6: Destructuring Assignment

The destructuring assignment syntax is a JavaScript expression that makes it possible to unpack values from arrays, or properties from objects, into distinct variables.

Example: 
```javascript
function generateObj() {
  return {
    color: "blue",
    name: "John",
    state: "New York",
    position: "Forward"
  }
}
var {name, state} = generateObj();

console.log(name); // John
console.log(state); // New York
```

> 📝 **To know more read the** [**Documentation**](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Operators/Destructuring_assignment)

## Exercises

### Exercise 5.1

Create a function named `askTvSerie()` that will ask the user for the following data about its favorite TV serie:

* Name
* Production year
* Names of the cast members (there can be as much as the user want)

That function must gather all the data in a single object and return it. The data structure must be elegant.

Create a program that use that function to generate a TV serie object and display it to the user in JSON format.

### Exercise 5.2

Create a function named `randomizeCast(tvSerie)` that will take as argument the data structure you defined in the previous exercise and return a list of the same cast but in a random order.

Create a program that will use `randomizeCast(tvSerie)` and `askTvSerie()` to ask the user about a TV serie then display a randomized list of the previous cast that will form the new cast of your next serie.

### Exercise 5.3

Try to refactor the *const* declarations to use a single line of destructuring:

```javascript
function nestedArrayAndObject() {
  // refactor this to a single line of destructuring...
  const info = {
    title: 'Once Upon a Time',
    protagonist: {
      name: 'Emma Swan',
      enemies: [
        {name: 'Regina Mills', title: 'Evil Queen'},
        {name: 'Cora Mills', title: 'Queen of Hearts'},
        {name: 'Peter Pan', title: `The boy who wouldn't grow up`},
        {name: 'Zelena', title: 'The Wicked Witch'},
      ],
    },
  }
  // const {} = info // <-- replace the next few `const` lines with this
  const title = info.title
  const protagonistName = info.protagonist.name
  const enemy = info.protagonist.enemies[3]
  const enemyTitle = enemy.title
  const enemyName = enemy.name
    
  return `${enemyName} (${enemyTitle}) is an enemy to ${protagonistName} in "${title}"`
}
```

## Resources

* [Object initializer](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Operators/Object_initializer)
* [Destructuring Assignment](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Operators/Destructuring_assignment)

## Next

[Classes](./06-classes.md)