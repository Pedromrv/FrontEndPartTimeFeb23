
# Algorithmics with JavaScript 07 - Extra exercises

## Exercises

These are additional exercises that are useful to confirm the skills you acquired. You are completely free to choose the best way to create them. Sometimes it may be appropriate to create functions and/or classes to better achieve your goals but that's up to you. You are the only judge here!

### Exercise 7.1 - Number Guesser

Make a program that generates an integer between 1 and 100 (don't display it to the user).

Then the program should display "Guess the number" and ask the user to guess. If the user enters a number which is too low it should display "Too low" and re-ask the question. If the user enters a number which is too high it should display "Too high" and re-ask the question. If the user guess correctly it should display "Well guessed!" and exit.

### Exercise 7.2 - Fibonacci Numbers

Make a program that asks for an integer `n` and generates the `n` first Fibonacci numbers.

Yes, you'll have to search what the hell are Fibonacci numbers.

### Exercise 7.3 - Divisors

Make a program that asks for a positive integer. Then display **all** the divisors of that integer which are not 1 or itself.

Examples:

* 7 => nothing (it's a prime number)
* 10 => 2 5
* 9187 => nothing (it's a prime number too)
* 134234 => 2 41 82 1637 3274 67117

### Exercise 7.4 - Pizza Flavors Manager

Make an interactive program to manager your favorite pizza flavors. When launched it must display a menu of this style:

```
Hello! Welcome to the Pizza Flavors Manager.

Please choose your actions:

1 - List all the pizza flavors
2 - Add a new pizza flavor
3 - Remove a pizza flavor
4 - Exit this program

Enter your action's number:
```

When the user enter the number of an action he will trigger the appropriate action:

* `List all the pizza flavors`: Display the current list of pizza flavors. (There should be none if we just launched the program.)
* `Add a new pizza flavor`: Ask the user for a new pizza flavor to add to the list.
* `Remove a pizza flavor`: Ask the user for the number of the pizza flavor in the list he wants to remove.

Each time one of the action has been performed it should return to the menu. (Except of course if we select to exit the program.)

**Bonus:** Save the list of pizza flavors on the file system and reload it each time we launch the application.

### Exercise 7.5 - Array Sort

Create a program that can sort an array *without using `Array.sort()` or a similar method*. Test it with multiple arrays of numbers.


## Classes special

### Exercise 7.6 - Class Circle

Create a class named `Circle` with attributes `xPos`, `yPos` and `radius`. Add a method named `move(xOffset, yOffset)` that will adjust the position of the circle. Add a getter accessor named `surface` that will return the surface of the circle.

Test its method and accessors by modifying the values and checking if everything is consistent.

### Exercise 7.7 - Class Rectangle

Create a class name `Rectangle` with attributes `topLeftXPos`, `topLeftYPos`, `width` and `length`. Add a method named `collides(otherRectangle)` that returns `true` only if the current rectangle collides with `otherRectangle`.

Test the `collides(otherRectangle)` method by using multiple test cases.

### Exercise 7.8 - Class random Rectangles

Create a program that will re-use the `Rectangle` class you created previously. It should generate 1000 random instances of `Rectangle` with random positions and sizes. Then it will display all colliding rectangles amongst those that were generated that way.
