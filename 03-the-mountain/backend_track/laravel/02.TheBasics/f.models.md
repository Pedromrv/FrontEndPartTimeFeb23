# Models

Now we have to connect thoses migrations to our application. It means that we have created migrations but the controller doesn't know how to fetch data from the tables.

[Related documentation page](https://laravel.com/docs/9.x/eloquent)

**So we need to create model for each migration!**

`php artisan make:model Article`


```php 
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';
}

```

And that's it ! Laravel will take care of creating all the queries necessary to communicates with the 'articles' table itself.
This is because the model above (Article) extends its parent class : Model.

Something you should know is that you might not even need to specify the table name. If your model is the singular version of the table name :
(Article -> articles), Laravel will automatically link the two.

#### Exercice (5)

1. Take your previous exercice **RestaurantsLaravel**
2. Create a Restaurant model
3. Link the model with your database if necessary.

- [Before](e.migrations.md)
- [Next](g.blade.md)
