# Routes

For this first step, you are going to create your very first route. But before doing that you need to understand what a route is and how it works.

Routes are the main entrance of a laravel application. That means when you create a route, you call its controller and of course a specific action.

[Related documentation page](https://laravel.com/docs/9.x/routing)

### Route example:
``` 
Route::get('/hello',function(){
    return '<h1>Hello !</h1>';
})
```

In the example above, instead of routing the request to another file (such as a view or a controller),
we directly return some HTML in the form of a string. It will then be displayed in the browser when accessing `http://localhost/hello`. Try it !

Here **'get'** is a **request method** In laravel, there are many **HTTP request methods**.

- get
- post
- put
- delete

## Definition of HTTP

>> HTTP defines a set of request methods to indicate the desired action to be performed for a given resource. Although they can also be nouns, these request methods are sometimes referred to as HTTP verbs. Each of them implements a different semantic, but some common features are shared by a group of them: e.g. a request method can be safe, idempotent, or cacheable.

## Here are some examples on how routes work.

!! Warning, the order of the routes is important ! You don't want your Laravel app to think that "create" is an ID.

```php
// Display all the articles
Route::get('/articles',function(){
    ...
});
// Post/publish the article
Route::post('/articles',function(){
    ...
});
// Show the form in order to create an article
Route::get('/articles/create',function(){
    ...
});
// Show a specific article page
Route::get('/articles/{article:id}',function(){
    ...
});

// Show the form of an article in order to update it
Route::get('/articles/{article:id}/edit',function($id){
    ...
});
// Update this specific article
Route::put('/articles/{article:id}',function($id){
    ...
})
// Delete a specific article
Route::delete('/articles/{article:id}',function($id){
    ...
});
```

You can see the seven traditional restful routes associated with a resource [here](https://laravel.com/docs/9.x/controllers#actions-handled-by-resource-controller).

### TIPS
`php artisan route:list` in the terminal gives you the list of routes your app contains.
As you can see, there may already be some other routes created automatically by Laravel.

#### Exercice (1)

1. Create a new laravel app called **'RestaurantsLaravel'**
2. Create 7 routes related to the **Restaurant** using the 4 HTTP methods seen above.

- [Before](a.hierachy.md)
- [Next](c.views.md)
