# Challenge: Travelio

> Social media 🕸️

## Learning objectives

- MonogoDB understanding
- Express understanding
- React improvements
- NodeJS back-end understanding
- Follow your choosen design strictly
- Deliver within the dead-line
- Create a deep understanding how Front-end and Back-end are connected.

## Introduction

Ah, FaceBook... Instagram... Twitter... Travelio..?
That's right! You will make a social media platform. Not just any social media platform. We want a platform for people that love traveling. A platform where people could see where others go on holiday. Or recommend where they stayed or which activities they did!

Basically a Social media only about travelling.

## The UX

There will be 2 roles on the platform:

- Admin
- User

#### The Client will be able to do the following things:

- Browse through the travel posts of other people.
- Befriend/remove people
- Search for countries/specific places.
- See the latest comments to that specific country/place.
- Add their own experience.
- Comment on other users their experiences.
- Rate other users their experience.
- Search for posts or places by searching certain Tags like ('Belgium' or 'Laser tag')
- Remove their own posts.

#### The admin will be able to do the following things:

- Block accounts
- Remove posts ("Keep deleted posts in the database, this can be used as proof against the user.")
- Edit descriptions of places or countries.
- View a list of all users in the system.

## Before coding...

This project quite some "pages", it's up to you to figure out which pages you need to realise this project.
Work out a strategy for the back-end, make priorities. Otherwise you will be lost.

Work closely together with the front-ender, discuss which things are urgent.

> ☝️ Dream big but start small - Prioritize at the beginning the things you think are most critical. This way you will always have something beautiful to show.

## Implementation

Besides a few constrains listed below, you're free to use anything you want for this project.

### Mockup & Design

We didn't make any mockup nor design for this project, this will be the first task for your group. Create or find a suitable design. You can remake existing social media's.

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

![](./dog-travel.gif)
