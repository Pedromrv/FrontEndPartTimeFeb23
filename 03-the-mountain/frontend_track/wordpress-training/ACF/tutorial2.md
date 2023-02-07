# ACF Tutorial: take the fields in the templates

Now that we have created our fields with the plugin, we must retrieve them in the templates of our theme.

In this case, we are going to put all this in `front-page.php`.

I will take over the fields one by one.

Regarding HTML tags and their attributes, I copy-paste my own code, it's up to you to adapt it to your project.

Concentrate on the PHP code, with the functions `get_field ()`, `the_field ()`, `get_sub_field ()`, `have_rows ()` ...

With a little practice, you will find that it is quite easy to retrieve the fields. And if you get stuck, the [ACF documentation](https://www.advancedcustomfields.com/resources/) explains well how to retreive it.

## `get_field()` & `the_field()`

The function `get_field()` is the basis to retreive a field. 

- The first parameter is the slug,  
- The second (optional) is the post id,
- The third (optional) is the return format 

For more explanations, have a look at the [documentation](https://www.advancedcustomfields.com/resources/get_field/) 

`the_field()` is the same as `echo get_field()`. It returns **the value** of a field. 

## Retrieving fields

### ACF to Rest API

To navigate around ACF objects, the **ACF to Rest API** plugin could help you.

To use it, in your browser type `...theme-name/wp-json/acf/v3/pages`.

You can see a JSON file that includes all the pages, sorted by their id, and all their ACF fields.

Thanks to the Wordpress REST API, you can easily retrieve all your fields and know how ACF organizes your content.

To know more about ACF to Rest API, see in the [documentation](https://github.com/airesvsg/acf-to-rest-api).

### Tab

As a reminder, this is a simple layout for the layout in the CMS.

### Image

- Field name: image_g

```php
<img class="image" src="<?php echo get_field('bandeau_image_g')['sizes']['home_top']; ?>">
```
As a reminder, I chose that the Image field returns me an array.

When you upload an image to Wordpress, it is not satisfied with the size provided. It will create a whole bunch of variations, some basic, others that can be assigned to it.

For example, here I have created a specific Image format for the top of my homepage called `home_top` which size is 1500px by 1250px.

To go and find my image format in the ACF object created, I have to write the key `['sizes']` then the desired format, here `['home_top']`.


### Title

- Field name: bandeau_titre_g

```php
<h1 class="title"><?php the_field('bandeau_titre_g') ?></h1>
```

### Overview

- Field name: bandeau_survol_g

```php
<h3 class="sous-titre"><?php the_field('bandeau_survol_g')['titre'] ?></h3>
```

### Button

- Field name: bouton

```php
<?php 
  $group = get_field('bandeau_bouton');

  if($group['title']) :

  $url = $group['url'];
  $target = 'target="_blank" rel="noopener"';

  if( $group['choice'] == 'pagelink' ) {
      $url = $group['page_link'];
      $target = '';
  } ?>

  <a class="lien" href="<?php echo $url ?>" <?php echo $target; ?> >
      <div class="icon-container">
        <img class="icon" href="<?php (source de l'image) ?>">
      </div>
      <p><?php echo $group['title']; ?></p>
  </a>

  <?php endif; ?>
```

Here, the code is a bit long, it is because there is a condition, either it is an internal link, or an external link.


## It's your turn

Your project is now well launched!

Of course, we haven't seen all types of fields. There are many. But you have seen the main principles of ACF.

For the other types, you will have to discover them thanks to the documentation.

Last advice to properly set up your custom fields, put yourself in the customer's shoes. He must be able to fill in his fields without asking too many questions and they must reflect what he sees on the front. Your client will thank you ...

Good luck with your project!

___

[Back to menu](../)
