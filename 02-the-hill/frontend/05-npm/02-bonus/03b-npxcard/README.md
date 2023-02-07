# Node.JS: `npx` card

> Your cli business card. 👾 Geeky and sexy.

- Type of challenge: **learning**
- Repository : **`npx-card`**
- Duration: 1 day
- Team : **solo**
- Submission : When the tool is published on npm, simply send us **the page to your npm package**.

## Introduction

Open your terminal and type the following command:

    $ npx leny

I know… it's as _cool_ as it's _useless_… so, it's _indispensable_!

You will code your own _npx business card_ on npm.  
_Why?_ Because.  
_Yeah but why?_ Stop asking question! [Do it!](https://gph.is/1RK0H8F)

## How it works?

If you take a look on the source code of [my npx card](https://github.com/leny/npxcard), you'll see the principle is simple: just write the content in the console.

The fact is that you can make it much simpler… and _funnier_.

### `npx`? huh?

[`npx`](https://www.npmjs.com/package/npx) is a very useful tools, shipped with node & npm since some versions.  
It allows many things, but the most useful feature for us is to be able to run the command `npx package-name` in a terminal: npx will download the package, put it in cache, then execute the script defined in the `main` property of the `package.json` file.  
It could not be simpler.

## Your _npxcard_

The goal, now, is to create _your_ **npxcard**.  
You will create and publish a npm package, named `@your-name/card`, with, as `main` property, a simple node script writing stuffs in the console.

> 💣 **HEY !** Using a [card generator](https://www.npmjs.com/package/create-my-card) is _completely_ useless and dumb.

This put aside, you have a total freedom for your npx card. Feel free to try some stuffs and create somethings that suits you: interactive resume, textual mini-game… anything.

There's [lot of packages](https://github.com/sindresorhus/awesome-nodejs#command-line-utilities) to do fun things with the terminal.

> 👉 **NOTE:** no need to publish your script to test it! If the `main` property of your `package.json` is correctly set, you can use the `node .` command to run your project.

---

Good luck!
