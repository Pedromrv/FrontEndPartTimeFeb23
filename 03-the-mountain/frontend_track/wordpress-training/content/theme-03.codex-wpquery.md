# The Codex

No, this is not an old book written by copyist monks. But the WordPress bible.

This is the medium that takes all the explanations on everything you want to know about WP. (I can’t say better)

Check it out :  https://codex.wordpress.org/

So, I know this way, we just figure out where to start? 
You can start by going through the Bible and learn a lot, but I would advise you to try to move forward on a project and many of your google searches will land on this codex.


# WP_Query

I will nevertheless strongly advise you to take a look here: 
[WP_Query](https://codex.wordpress.org/Class_Reference/WP_Query) or [How to Retrieve Any Post You Want With WP_Query](https://www.codeinwp.com/blog/getting-posts-wp_query-class/).  
WP_Query is a class. It contains a lot of information.  Type `var_dump($wp_query);` in one of your templates and see the result in your browser.

It allows you to retrieve any type of post on any template of your theme.

Once the query is called with the correct arguments, simply loop into the object to display the posts (and what they contain).

Here is an example, in which I want to display the last 3 "pates" posts according to a date ACF field compared to today :

```PHP
<ul class="list-pastas">
	<?php 
		$today = date('Ymd');

		$q = new WP_Query(array( 
        	'post_type' => 'pates',
        	'order'   => 'ASC',
        	'meta_key' => 'infos_dates_from',
        	'orderby'  => 'meta_value',
			'posts_per_page' => 3,
			'meta_query' => array(
				array(
				'key' => 'infos_dates_from',  // ---> The field ACF 'date'
				'value' => $today,
				'compare' => '>='
				))
	    ));
		if ( $q->have_posts() ) : while( $q->have_posts() ) : $q->the_post();?>
		<li class="item-pate" when-visible="fade" id="<?php echo $post->post_name; ?>">
			<a href="<?php the_permalink(); ?>">
				<div class="text-container">
					<p class="dates"><?php the_field('infos_dates_from'); ?>
					<h3 class="title"><?php the_title(); ?></h3>
				</div>
			</a>
		</li>
		<?php endwhile; endif; ?>
	<?php wp_reset_postdata() ?>
	</ul>
```

Note that if I do a var_dump($post); in my loop, my browser will display the object of each post.

Try to see.


----

- [04. Useful functions...](theme-04.useful-functions.md)
