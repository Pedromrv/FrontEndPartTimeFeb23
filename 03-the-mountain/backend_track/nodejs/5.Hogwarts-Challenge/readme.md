# Hogwarts Challenge

- Repository: `hogwarts-challenge`
- Type of Challenge: `Consolidation`
- Duration: `3 days for "doable"`
- Deployment strategy : `Heroku`
- Team challenge : `solo`

## Mission objectives

![The Gryffindor common room](./common-room.jpg)

You've been asked by your local Harry Potter fan club to create their web app. A social network that would allow any Potterhead to live the Hogwarts experience. How so? Any aspiring wizard could register on the website. They get randomly assigned to a `house` (namely `Gryffindor`, `Hufflepuff`, `Ravenclaw` & `Slytherin`). Users from the same house have access to a common-room, which only them can read. The common room is just a simple lobby with a list of messages posted by other users from the same house.

The way you store information is up to you; MongoDB, PostGreSQL ... even on files if that's your kink, whatever your choice is; information has to be stored somewhere!

All the below features have to be implemented in the form of a REST API, this API should only return JSON (or images if you go the extra mile), not HTML!

Please note that this challenge gets funnier if you pair up with a frontend developer to build an interface on top of your API.

### 🌱 Must have features

- Users can sign up using an email and a password
- Users can log in using their email and password
- Users can view message from their lobby
- Users can post message on their lobby
- Users can edit their own message

### 🌼 Nice to have features (doable)

- Implement an admin role (see the endpoint list below for details)
- Implement a direct message system (user to user message)

### 🌳 Nice to haves (hard)

- Try to implement Anti-bruteforce (ex: people cannot attempt more than 5 failed logins/hour)
- Implement some sort of automated unit testing for your endpoints.
- Users should be able to upload files to their lobby. Only people from the same house (or admins) should be able to see the file (even if they have the URL!)
- Use websockets to refresh the lobby and DMs in real time

## Resources

### List of endpoints

Here is an example of the endpoints you could implement.

| Endpoint                | Method | Bearer token? | Admin only | Request                                      | Response                                                                                                               |
| ----------------------- | ------ | ------------- | ---------- | -------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- |
| /api/register           | POST   |               |            | An object containing a login, and a password | A message stating the user has been created (or the approriate error, if any)                                          |
| /api/login              | POST   |               |            | An object containing a login, and a password | A JSON Web Token (or the approriate error, if any)                                                                     |
| /api/lobby              | GET    | yes           |            | -                                            | An array containing all the message from the lobby                                                                     |
| /api/lobby/[id]         | GET    | yes           |            | -                                            | A single message object from the lobby                                                                                 |
| /api/lobby              | POST   | yes           |            | An object containing the message             | A message stating the message has been posted (or the approriate error, if any)                                        |
| /api/users              | GET    | yes           | (yes)\*    | -                                            | A list of users, if the user is an admin gets all the registered users, if not only gets the users from the same house |
| /api/users/[id]         | GET    | yes           |            | -                                            | A single user. If the user is not an admin, can only get details from people that are in the same house.               |
| /api/users/[id]/promote | POST   | yes           | yes        | -                                            | Gives admin right to the user                                                                                          |
| /api/users/[id]/demote  | POST   | yes           | yes        | -                                            | Removes admin right from the user (cannot be done on self)                                                             |
| /api/lobby/[id]         | PATCH  | yes           | (yes)\*\*  | An object containing the message patches     | Edit a message. Users can only edit their own messages, unless they are admins.                                        |
| /api/lobby/[id]         | DELETE | yes           | (yes)\*\*  | -                                            | Delete a message. Users can only edit their own messages, unless they are admins.                                      |

Good luck!

![Sorting hat](./sortinghat.gif)
