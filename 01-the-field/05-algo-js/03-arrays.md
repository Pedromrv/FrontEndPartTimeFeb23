
# Algorithmics with JavaScript 03 - Arrays

Arrays are one of the simplest data structures in programming. They allow to store a collection of elements in a precise order.

## Theory

### Declaration

```javascript
let emptyArray = []; // an empty array

let numbersArray = [1, 2, 3]; // an array with 3 numbers

let stringsArray = ["Apple", "Pear", "Banana", "Cherry"]; // an array with 4 strings
```

It's not much more complicated.

### Access a specific element

```javascript
let arr = ["Gerard", "Lambert"];

console.log("Hello " + arr[Ø] + " " + arr[1]);
```

The `[]` syntax allows to access a specific element in the array using its index. Note that, in JavaScript, we always consider that indexes start at `0`. So the first element is at index `0`, the second one at index `1`, etc...

You can also modify a specific element this way:

```javascript
let arr = [1, 2, 3];

arr[2] = 4;

console.log(arr); // [1, 2, 4]
```

### Obtain the size of an array

```javascript
let arr = [1, 2, 3];

console.log("The size is " + arr.length); // display "The size is 3"
```

`<array>.length` gives the number of elements in an array

### Add and remove elements from an array

```javascript
let arr = ["Apple", "Pear", "Banana"];

console.log(arr); // ["Apple", "Pear", "Banana"]

arr.push("Cherry");

console.log (arr); // ["Apple", "Pear", "Banana", "Cherry"]

arr.pop();

console.log(arr); // ["Apple", "Pear", "Banana"]
```

`push()` and `pop()` respectively. Note that they only work on the end of the array.

### Iterate on an array

Quite often we need to iterate on arrays to perform some operation on all its elements. You will see different techniques.

The old-and-ugly-but-it-works:

```javascript
let arr = ["Apple", "Pear", "Banana"];

for (let i = 0; i < arr.length; i += 1) {
  console.log("Do you want to eat a " + arr[i] + "?");
}
```

And the cool-kids:

```javascript
let arr = ["Apple", "Pear", "Banana"];

for (let elem of arr) {
  console.log("Do you want to eat a " + elem + "?");
}
```

The `for...of` is a specific syntax to iterate on arrays. Try to use it for readability.

### Important methods to know

There are many methods link to the array.prototype. Here, we list the most useful & powerful. 
With these methods, you may not use the "for loop" anymore !

* [forEach()](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/forEach) : an another way to iterate through an array
* [filter()](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/filter) : creates a new array that pass the test implemented by the provided function
* [reduce()](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/Reduce) : uses an accumulator (& more)
* [map()](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/map) : creates a new array transformed with the function applied

> 💡 NB: All these methods use a callback function

### ES6: Spread Operator `...`

The spread operator allows you to "explode" an array into its individual elements.

This actually allows us to push elements easily into other arrays. 

We use it by using `...` before the array. 

Example: 
```javascript
let first = [ 1, 2, 3];
let second = [ 1, 2, 3];

first.push(second);

console.log(first); // [ 1, 2, 3, [ 4, 5, 6] ]
```

But instead, if I spread out the second array and push that in, you can see I get the individual items pushed in.

```javascript
first.push(...second);

console.log(first); // [1, 2, 3, 4, 5, 6]
```

### ES6: Destructuring assignment 

```javascript
var [first,,,,fifth] = ["red", "yellow", "green", "blue", "orange"]

console.log(first); // red
console.log(fifth); // orange
```

## Exercises

### Exercise 3.1

Write a program that will add all the elements of an array.

Test it with the following arrays:

* `[1, 2, 3, 4, 5]` => 15
* `[100, 101, 102]` => 303

### Exercise 3.2

Write a program that will calculate the average value of a given array.

Test it with the following arrays:

* `[1, 2, 3, 4, 5]` => 3
* `[100, 101, 102]` => 101

### Exercise 3.3

Write a program that will create a duplicate of a given array.

Bonus: make a first version that will only do it using `push()`. Make a second version that uses a single method call to perform the copy. 

### Exercise 3.4

Write a program that will display the minimum and maximum elements of a given array.

### Exercise 3.5

You get an array of numbers, return the sum of all of the positives ones.

Example: `[1,-4,7,12] => 1 + 7 + 12 = 20`

Note: if there is nothing to sum, the sum is default to 0

### Exercise 3.6 : Sentence Smash
Write a program that takes an array of words and smashes them together into a sentence and returns the sentence. You can ignore any need to sanitize words or add punctuation, but you should add spaces between each word. Be careful, there shouldn't be a space at the beginning or the end of the sentence!

Example:
```js
['hello', 'world', 'this', 'is', 'great']  =>  'hello world this is great'
```

## Resources

* [Array](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array)

## Next

[Functions](./04-functions.md)
