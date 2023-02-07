
# Algorithmics with JavaScript 04 - Functions

Functions are pieces of code that can be reused at multiple different places in the same program. They are essential for [code reuse](https://en.wikipedia.org/wiki/Code_reuse), [modularity](https://en.wikipedia.org/wiki/Modularity) and [separation of concerns](https://en.wikipedia.org/wiki/Separation_of_concerns).

## Theory

### Simple function definition

```javascript
function hello(name) {
  console.log("Hello " + name);
}

hello();
```

```javascript
function add(a, b) {
  return a + b;
}

console.log("The sum of 2 and 3 is " + add(2, 3));
```

It's the basic way to declare a function. The additional parameters we pass when calling a function are called its *arguments*. A function can also return something using `return`. (But it doesn't have to.)

### Arrow functions

```javascript
let myFunction = (a, b) => {
  return a + b;
}

console.log(myFunction(2, 3)); // 5

myFunction = (a, b) => {
  return a * b;
}

console.log(myFunction(2, 3)); // 6
```

Arrow functions ("arrow" is simply related to the look of the `=>` symbol) is a shorter syntax to define functions. But it's important to know that when doing so the function is an *anonymous* one. This means it doesn't have a specific name. That's why just defining it is useless unless you do something with it. (Like assigning it to a variable in the examples.)

Even if they may not seem useful currently they have a lot of specificities that make them used quite a lot in JavaScript. So you should be aware of them.

### Recursivity

```javascript
function count(i) {
  if (i <= 100) {
    console.log(i);
    count(i + 1);
  }
}

count(1);
// displays all numbers from 1 to 100
```

This has nothing to do with a language element in JavaScript. *Recursivity* is a programming technique that you can use in all programming languages. It's used when a function calls itself.

There exist some mathematical demonstrations that prove recursive functions can always be used instead of loops for all type of calculation, just like the opposite is true. In term of ease of use and readability sometimes loops are more appropriate and sometimes recursive functions are better.

We won't make a whole lecture about it because it's not the simplest thing to master. But you should know it exists and try remember it as it can be useful from time to time.

## Exercises

### Exercise 4.1

Create a function named `calcSurface` that takes the length and width of a rectangle and returns its surface. Then create a program that asks the length and width of a rectangle to the user then displays the surface of that rectangle. That program must use the function you created.

Write a documentation for the `calcSurface` function.

### Exercise 4.2

Create a function named `rand10()` that returns a random integer between 1 and 10. Create a program that will display the result of that function each time it is run.

Write a documentation for the `rand10()` function.

You will have to search on Google how to generate random numbers in JavaScript for this exercise.

### Exercise 4.3

By reusing the function `rand10()` created in Exercise 2, write a function named `multiRand(n)` that returns an array of `n` numbers between 1 and 10. You should not modify anything in `rand10()` to achieve this.

Write a documentation for the `multiRand(n)` function.

Use that function to create a program that will ask the number of random numbers to generate then display that same number of random numbers.

### Exercise 4.4

Create a function named `average(arr)` that takes an array of numbers as argument and returns the average.

Create a function named `min(arr)` that takes an array of numbers as argument and returns the minimum element.

Create a function named `max(arr)` that takes an array of numbers as argument and returns the maximum element.

Create a program that asks a number to the user then generate that same amount of random numbers but also displays their average, min and max. To do so, use the three functions you just created as well as the `multiRand(n)` function created in Exercise 3.

Write a documentation for all the functions you created.

### Exercise 4.5

Create a function named `calcDistance` which takes the coordinates of two different points `A` and `B` in a 2D space. That function must return the distance between those two points.

Examples results:

* Point A = [1, 1], point B = [2, 2] => 1.41
* Point A = [1, 1], point B = [3, 1] => 2
* Point A = [4, 1], point B = [1, 1] => 3
* Point A = [-2, 2], point B = [2, -2] => 5.65

Create a program to use that function.

Write a documentation for the `calcDistance` function.

Note: You probably need to make some search on Google to learn the mathematical formula to do that. You will also probably need to search for useful functions in JavaScript to help you making complex mathematical formulas...

### Exercise 4.6 : factorial

Create a function `factorial(a)` that returns the factorial of a number.

That function must be recursive.

### Exercise 4.7 : Elevator

Given 2 elevators (named "left" and "right") in a building with 3 floors (numbered 0 to 2), write a function "elevator" accepting 3 arguments (in order):

left - The current floor of the left elevator
right - The current floor of the right elevator
call - The floor that called an elevator
It should return the name of the elevator closest to the called floor ("left"/"right").

In the case where both elevators are equally distant from the called floor, choose the elevator to the right.

You can assume that the inputs will always be valid integers between 0-2.

Examples:
```js
elevator(0, 1, 0); // => "left"
elevator(0, 1, 1); // => "right"
elevator(0, 1, 2); // => "right"
elevator(0, 0, 0); // => "right"
elevator(0, 2, 1); // => "right"
```

### Exercise 4.8 : The Supermarket Queue

There is a queue for the self-checkout tills at the supermarket. Your task is write a function to calculate the total time required for all the customers to check out!

#### input
* customers: an array of positive integers representing the queue. Each integer represents a customer, and its value is the amount of time they require to check out.
* n: a positive integer, the number of checkout tills.

#### output
The function should return an integer, the total time required.

Examples:
```js
queueTime([5,3,4], 1)
// should return 12
// because when there is 1 till, the total time is just the sum of the times

queueTime([10,2,3,3], 2)
// should return 10
// because here n=2 and the 2nd, 3rd, and 4th people in the
// queue finish before the 1st person has finished.

queueTime([2,3,10], 2)
// should return 12
```

#### Clarifications
* There is only ONE queue serving many tills, and
* The order of the queue NEVER changes, and
* The front person in the queue (i.e. the first element in the array/list) proceeds to a till as soon as it becomes free.
* You should assume that all the test input will be valid, as specified above.


## Resources

* [function](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Statements/function)
* [Arrow functions](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Functions/Arrow_functions)

## Next

[Objects](./05-objects.md)
