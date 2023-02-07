# Mini Trading app API

## Challenge description

For this challenge you'll have to build a mini (fake) trading app, as an API.

Through API calls you will be able to open simple positions (buy) then close them later (sell everything at once).

## DB Schema

The db schema will be the following :

![db schema](db_schema_trading_app_challenge.png 'Title')

( Note : this schema was made using https://drawsql.app/ )

## Authentication

As you will build an API, especially sensitive because it's about money, you need to have authentication. A very common mean is to use a token like JWT (JSON web Token), but every major framework come with built-in authentication so hopefully you won't have to worry about it and implement it from scratch.

## Random notes

### Check the buying power

Obviously you shouldn't be able to open position bigger than your balance (we don't simulate leverage).

### Example of request

The backend will receive requests like this one :

> Buy 123 $TSLA shares

It means your backend must check if the user's balance is big enough to open that trade, so it also means your backend should be able to compute the total value of 123 Tesla shares.

As a result you backend must use an API to check the price of each stock. You'll find online a lot of API to get stock prices.

Let's notice that the `price` field in the TRADES tables is the price of the stock NOT the price of the position.

Example

> Buy 123 Tesla shares, we are 25th of October 2021, it's 16h23, the TSLA share is at $1,030.59

In the db we will store the following in the TRADE table :

| TRADE           |                       |
| --------------- | --------------------- |
| symbol:         | TSLA                  |
| quantity:       | 123                   |
| open_price:     | 103059                |
| close_price:    | null                  |
| open_datetime:  | 16h23 25/10/2021 CEST |
| close_datetime: | null                  |
| open:           | true                  |

As soon as we close the position (we sell everything) we will update the record in the database like so for instance :

| TRADE           |                       |
| --------------- | --------------------- |
| symbol:         | TSLA                  |
| quantity:       | 123                   |
| open_price:     | 103059                |
| close_price:    | 119449                |
| open_datetime:  | 16h23 25/10/2021 CEST |
| close_datetime: | 11h00 08/11/2021 CEST |
| open:           | false                 |

We can see that we made a profit because we sold at a higher price $1,194.49

## Endpoints API

| Method | route                    |                                                                                              |
| ------ | ------------------------ | -------------------------------------------------------------------------------------------- |
| GET    | /api/login               | Login                                                                                        |
| POST   | /api/signup              | Signup                                                                                       |
| POST   | /api/wire                | Make a wire (deposit OR withdraw money)                                                      |
| GET    | /api/profile             | Fetch all the profile data, including the user's balance                                     |
| PATCH  | /api/update              | Update user's profile (except balance)                                                       |
| GET    | /api/trades/index        | Fetch all our trades                                                                         |
| GET    | /api/trades/:id          | Fetch one trade info                                                                         |
| GET    | /api/trades/index/open   | Fetch all our open trades                                                                    |
| GET    | /api/trades/index/closed | Fetch all our closed trades                                                                  |
| POST   | /api/openTrade/          | Open a long position (buy), the amount and the stock is specified in the body of the request |
| POST   | /api/closeTrade/:id      | Close the position                                                                           |
| GET    | /api/closedPNL           | Return the total closed PNL (all closed trades)                                              |
| GET    | /api/openPNL             | Return the total open PNL (all open trades)                                                  |
| GET    | /api/currentBalance      | Return current balance (all the money that is NOT in an open position)                       |

:warning: Be careful that some of these routes require authentication!

## Some nice feature to go a little further

- Implement an email or sms notification system so that your user receive a confirmation message whenever they lost money on a closed position.
