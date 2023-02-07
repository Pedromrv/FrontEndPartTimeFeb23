# Some functions...


Here is the complete list of functions of WordPress.

[Codex Function Reference](https://codex.wordpress.org/Function_Reference)

There are a lot. 

I noticed here a few often used :

- Display the title of a post/page

```php
    <?php the_title(); ?>
```

- Give the title value of a post/page

```php
    <?php get_the_title(); ?>
```

- Display a link post

```php
    <?php the_permalink(); ?>
```

- To display a template

```php
    <?php get_template_part('the_template_path'); ?>
```

- To test if we have posts to display

```php
    <?php if (have_posts()) : ?>
	//here, display the posts
    <?php else : ?>
	//here, the text to display if there is not post
    <?php endif; ?>
```

- To retreive the id of a post/page 
```php
    <?php get_the_ID(); ?>
```

- To check a condition regarding the template

```php
    <?php 
    	is_front_page();
    	is_single();
    	is_page();
    	is_page_template(' ');
    	is_post_type_archive(' ');
        is_singular(' '); 
    	is_search();
    	...
    ?>
```


- To display the theme directory

```php
    <?php get_template_directory_uri(); ?>
```

- To display an array of a category type 

```php
    <?php get_categories('taxonomy=noodles'); ?>
```

- To display the archive link

```php
    <?php get_post_type_archive_link('pastas'); ?>
```



## ACF Functions

[documentation ACF](https://www.advancedcustomfields.com/resources/)


- To get back the value of a field and display it 

```php
    <?php echo get_field('slug', id) ?>
```


- To display a field value

```php
    <?php the_field('slug', id) ?>
```

- To use a *repeater (a list)*

```php
<?php
    // check if the repeater field has rows of data
    if( have_rows('repeater_field_name') ):
        <ul>
        // loop through the rows of data
        while ( have_rows('repeater_field_name') ) : the_row();
            <li>
                // display a sub field value
                the_sub_field('sub_field_name');
            </li>
        endwhile;
        </ul>
    else :
        // no rows found
    endif;

?>
```

For the rest, see the documentation, it is very educational.


----

- [05. Organise your Theme folder](theme-05.theme-organisation.md)
