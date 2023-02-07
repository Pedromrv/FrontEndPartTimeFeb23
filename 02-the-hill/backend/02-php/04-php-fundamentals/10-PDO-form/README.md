# Simple project example

Here you'll find files with using some PHP basics concepts. 

You need to use the `classicmodels` database to run the queries.

## Includes directory

It contains the `header.php` & `footer.php` templates. 

There are applied in every php pages to be displayed. 


## PDO & MySQL requests

`connexion.php` : the connexion to the DB file using PDO and.

`index.php` : where we display all the datas from products table. 

`product.php` : where we display one product from its productCode.  


## Form, user subscription & login

`subscription.php` : an example of form for a user subscription.
- use _$_POST_ superglobal
- validate email with filter
- hash password with becrypt
- prepare, bind datas & execute the request. 
- redirection to the homepage with `header()`;

`login.php` : login to the website for the user.
- check the password with `password_verify()` 
- create a _$_SESSION_ for the user

`logout.php` : logout to the website for the user.
- delete the _$_SESSION["user"]_ with `unset()`

