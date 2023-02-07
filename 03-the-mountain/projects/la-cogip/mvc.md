## What is an MVC?

MVC is a classic web design pattern consistent of three levels, and is an extension of the principle of **separation of concerns**:

- The **Controller** responds to user actions and invokes changes on the model or view as appropriate.
- The **Model** represents the information on which the application operates--its business logic.
- The **View** renders the model into a web page suitable for interaction with the user.

For now you should create 3 different directories:
- **Controller/**: has access to GET/POST vars, receives the Request
- **Model/**: Most of your code should be here, for example the Product and Customer class.
- **View/**: Your HTML files.

While splitting up the Controller & Model is quite intuitive, splitting up the View from the Controller might require a larger change in how you write code. Let us look at some example:

```php
<?php
//oldcode.php
if($_GET['age'] > 18) {
    echo '<h1>You are an adult!</h1>';
} else {
    echo '<h1>You are a child!</h1>';
}
```

We can split this up into two files:
```php
<?php
<!-- controller.php -->
$sentence = ($_GET['age'] > 18) ? 'You are an adult!' : 'You are a child!';
require 'view.php';
```

```php
<!-- view.php -->
<h1><?php echo $sentence?></h1>
```