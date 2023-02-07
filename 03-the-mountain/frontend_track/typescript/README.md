# TypeScript intro

- Repository: `intro-typescript`
- Mode: `solo`
- Type of Challenge: `learning challenge`
- Duration: `2 days`
- Team challenge : `solo`

## Your mission

In recent PHP versions, it's possible to use the `strict types` option.
This allows us to define what type a certain variable is expected to be.
Without strict typing, PHP will auto-convert a variable when needed.
While helpful in some situations, it can also cause some unexpected results.
With `strict typing`, the wrong type will produce an error, notifying the developer and telling what the problem is.

In some cases, we might want similar behaviour in JavaScript.
If that's the case, you can use TypeScript.
Think of TypeScript not as a framework (in fact, it can work together with frameworks like React) but as an extra layer: it allows us to use some extra's on top of JavaScript.

> Tools like `webpack` will compile this down to regular JavaScript, so every browser can read it.


The goal of this exercise is not to know everything there is in TypeScript, but to give you an idea of what it can do.
________________________________________________________________
________________________________________________________________

# The first mission

In the [starter pack](starter-pack), you'll find the provided setup.
Our goal is to convert it to TypeScript.

The src (source) folder contains your source file, that's the one where you will develop.
The public folder will contain the resulting one (after compilation), which will be used by the index file.

## 🌱 Must-have's

- [Install TypeScript globally on your system](https://www.typescriptlang.org/docs/handbook/typescript-tooling-in-5-minutes.html#installing-typescript)

- Use a [config file](https://www.typescriptlang.org/docs/handbook/migrating-from-javascript.html#writing-a-configuration-file), and adapt it so it will compile from your src folder to the public folder.
Run `tsc` to compile the src JS file. Load the result from the public folder in the index.html.

- Time to look around in the TypeScript possibilities. Some recommendations to read:
    - [Basic types](https://www.typescriptlang.org/docs/handbook/2/everyday-types.html)
    - [TypeScript in 5 minutes](https://www.typescriptlang.org/docs/handbook/typescript-tooling-in-5-minutes.html)
    - Find some interesting docs? Share it with your peers and coach!

> It's okay if not everything in the docs makes sense at this point. Remember: we're trying to get an idea of what TypeScript can do, not doing a deep dive.

- Switch your source file to a TypeScript file. Since TypeScript behaves more strict than regular JavaScript, we'll need to adapt the code for it to work again.
Check for any errors coming up and fix them.

- We've fixed the errors, is there more we can do?
Let's make the best out of the typing system and add a type to all our variables.
Lastly, what about the functions - anything we should adapt there?
Tip: switch to strict compiling now. This will force you to make as much use of TypeScript as possible.

## 🌼 Nice-to-have's (Doable)
- Move the index.html inside the public folder. Usually this will be the location of this file in bigger projects.
- Usually, you will use Webpack to compile a bunch of things (the styling, for example) instead of just TypeScript.
Use a Webpack to compile your typescript to your public folder.

________________________________________________________________
________________________________________________________________
# The second mission
- Team challenge : `solo`
- Repository: `the-impossible-quiz`
- Mode: `solo`
- Type of Challenge: `Consolidation`
- Duration: `3 days`


> Create "The impossible quiz", completely with typescript.

## 🌱 Must-have's
- 10 pages, each with a question and an input field for an answer.
- When wrong -> try again message | When right -> move to next page (next question).

## 🌼 Nice-to-have's (Doable)
- Use different types of answers (numbers, strings, arrays, etc).
- Add/remove lives for correct and wrong answers.
- Add a timer on all the questions. (time up = lose life)

## 🌳 Nice-to-have's (hard)
- Create a user input at the start of the game to play with a username.
- Add animation to the pages.
- Create a hint-button per question: 1 hint costs 1 live.


Let's stretch those fingers!    
![](images/type.gif)