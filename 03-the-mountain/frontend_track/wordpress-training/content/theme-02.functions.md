# functions.php

That’s in this file that we write all the functions to customize its theme, ***filter*** them or add features to the ***action***.

Filters and Actions are called **Hooks**. 

`functions.php` allows you to modify your Wordpress from the theme without touching the core of the beast.

If you want to create your own php functions, put them here too.


## Examples

### The menu

To register the navigation menu :

```PHP
  function register_theme_menus() {
    register_nav_menus( 
      array(
        'menu-header-1' => __( 'Header 1' ),
        'menu-footer-1' => __( 'Footer 1' ),
      )
    );
  };
  add_action( 'init', 'register_theme_menus' );
```

### Remove Gutenberg

Personally, I don’t like the text editor Gutenberg. Because when you use the ACF, I don’t see the use of it.

So I create this filter in my projects.

```php
  // for posts
  add_filter('use_block_editor_for_post', '__return_false', 10);
  // for post types
  add_filter('use_block_editor_for_post_type', '__return_false', 10);
```

### Clean the Dashboard menu up

It may be advisable to clean up your CMS a bit by removing unnecessary things. This is especially true when we give the project to the client, so only really useful buttons will be shown to him.

```php
  function my_wpadmin_sidebar_menu() {
      remove_menu_page( 'index.php' );  // 'Dashboard'
      remove_menu_page( 'upload.php' );   // 'Media'
      remove_menu_page( 'edit.php' ); // 'Posts'
      remove_menu_page( 'edit-comments.php' ); // 'Comments'
      remove_submenu_page('upload.php','media-new.php'); // 'Medias'
      remove_submenu_page('plugins.php','plugin-install.php'); // 'Puglins->install'
      remove_submenu_page('plugins.php','plugin-editor.php');
  }
  add_action('admin_menu','my_wpadmin_sidebar_menu', 999);
```

We can also adapt what appears in the menu according to the role of the user (but for that, I let you discover).

---

[03. The Codex & WP_Query](theme-03.codex-wpquery.md)
