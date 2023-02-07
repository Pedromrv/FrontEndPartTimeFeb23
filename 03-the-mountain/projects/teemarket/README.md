# Challenge: Teemarket

> E-shop project 🛒

## Learning objectives

- MonogoDB understanding
- Express understanding
- React improvements
- NodeJS back-end understanding
- Follow your choosen design strictly
- Deliver within the dead-line
- Create a deep understanding how Front-end and Back-end are connected.

## Introduction

Some of us use it daily, The internet is full of it, yes - I am talking about an online webshop. But instead of using one, you will be creating one!

## The UX

There will be two interfaces:

- The client interface (the website).
- The admin dashboard.

#### The Client will be able to do the following things:

- Login/Register in order to be able to buy items.
- Browse through different products/categories.
- Use a searchbar to look for a specific shopping item.
- Filter products based on the category, price, etc...
- Like/review product.
- Add products to the cart/wishlist.
- The user can add more then one piece of each product.
- Place the order (skip the payment process - for the ones that want, set up a fake payment process.)
- Edit/Delete the account

#### The admin will be able to do the following things:

- Add/list products
- Update product details, quantity.
- See all running orders.
- View a list of all users in the system.
- Ban/unban a single user.

## Before coding...

This project quite some "pages", it's up to you to figure out which pages you need to realise this project.
You can also decide what kind of shop you are making. Video games - Fashion - Do it yourself - or something similar to amazon!

> ☝️ Dream big but start small - Prioritize at the beginning the things you think are most critical. This way you will always have something beautiful to show.

## Implementation

Besides a few constrains listed below, you're free to use anything you want for this project.

### Mockup & Design

We didn't make any mockup nor design for this project, this will be the first task for your group. Create or find a suitable design. You can remake existing webshops.

> Need some designs or inspiration? Check [this]('https://preview.themeforest.net/item/molla-ecommerce-html5-template/full_screen_preview/25119280?_ga=2.213305233.420292844.1634631855-169386747.1634631855') out!

### Technical Stack

You will have a technical stack to follow.

#### Back-end

A `Rest-like API` using:

- Node.JS
- MongoDB

#### Front-end

A `Single Page App` using:

- React
- Tailwind

#### Toolchain / DEV Env

The project is provided with a `docker-compose.yml` and its documentation in markdown: [`docker-readme.md`](./docker-readme.md).
The whole project's code will be written in `src`. The compiling tools are configurated to push the compilated files in the `bin` folder.

> ⚠️ **WARNING:** Never **ever** put your modifications to the project in the bin's files ! He will be replaced by a new bin folder at your next compilation!

##### Back-end

Back-end part will be compiled with [BabelJS](https://babeljs.io). The back-end's code is located in `src/server`.

We prepared for you a little snippet of functional code that configure your server **express**, an API route : `GET /hello` and the middleware _middleware_ **static** to display de client's files.

You are free to use this snippet or rewrite it.

###### Compilation

There is two compilation's options :

- `npm run build:server` (compile your code)
- `npm run work:server` (compile then observe your files and recompile if you make any modifications)
  > ☝️ **NOTE:** Do not forget to run your docker-compose before building the back-end part.

##### Front-end

For the front-end part your code will be compiled/packaged with [Webpack](https://webpack.js.org/). The code is written in `src/client`.

> ☝️ **NOTE:** Webpack is a powerfull tool that can be complex to learn. We suggest you to take some time to learn this tool during your "pâturages" and maybe provide your collegues a workshop about it.

Like the back-end part, we prepared a little snippet of code displaying a React component with the text "_Hello, World_".

###### Compilation

To compile the front-end code there is two options:

- `npm run build:client` (compile your code)
- `npm run work:client` (compile then observe your files to recompile them in case of any modifications)

##### Prettier & ESLint

The project is configured to use [Prettier](https://prettier.io) & [ESLint](https://eslint.org).

###### Compilation

To check your files with ESLint and Prettier you can also run this command: `npm run lint`.

###### Hooks git

The project is also configured with a _hook_ de **precommit** for git: when you will try to commit your files, ESLint and Prettier will be executed and, in case of error, the commit will be canceled to let you correct your mistakes. This way you will have the certitude of commiting files exempt of potential problems.

#### Deployment

We are expecting a **functional** and _deployed_ project.
One of the solutions is to use [**Heroku**](https://www.heroku.com). To host your Database, Heroku is working with [**mLab**](https://mlab.com) .

---

## Deadline

The project **have** to be online the **19/11/2021 16H59**.  
We are expecting an e-mail for each group with a link to the repository and a link to the application in production.

Have fun and good luck!

![](./amazon-gif.gif)
