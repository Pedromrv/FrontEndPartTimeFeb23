# Blade templates

Blade is the simple, yet powerful templating engine that is included with Laravel. 
Unlike some PHP templating engines, Blade does not restrict you from using plain PHP code in your templates.

[Related documentation page](https://laravel.com/docs/9.x/blade)

## Echoing data

```php
@php $name = "John"; @endphp
<p>{{ $name }}</p>
```

## Blade if statement

```php
@php $age = 18 @endphp

@if($age >= 18)
    <p>You are an adult!</p>
@else
    <p>You are a teenager</p>
@endif
```

## Blade loops
```php
@for($i = 0; $i < 10; $i++)
    <p>The current value is {{ $i }}</p>
@endfor
```

```php
@foreach($posts as $post)
    <p><{{ $post->title }}/p>
@endforeach
```

```php
@while(true)
    <p>Hi, I am a loop</p>
@endwhile
```

## Defining a master layout
As we know, most of the web application fellows the same layout, so the best way is to create a master page which will be called every time a page will be created.

```
|-resources
    |-views
        |-posts
          index.blade.php   
        |-layout
          app.blade.php

```

So, here is our master layout (resources/views/layout/app.blade.php)

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    
    @yield('content')

</body>
</html>
```

So, if I create a new page, I include the master layout 

For instance:

```php
@extends('layout.app')

@section('title','My first page')

@section('content')
    <p>lorem ipsum...</p> 
@endsection
```

## Components

If you want to fully take advantage of the Blade templating engine in order to create reusable components in your app
(similarly to front-end frameworks like Vue.js or React), you can read the following content : [https://laravel.com/docs/9.x/blade#components](https://laravel.com/docs/9.x/blade#components)

- [Before](/02.TheBasics/f.models.md)
- [Next](../03.Exercice/readme.md)
