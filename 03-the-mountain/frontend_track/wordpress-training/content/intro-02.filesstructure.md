# The WordPress files and folders organisation

Let’s begin by watching what we’ve installed. 

All the WordPress websites have the same structure. At the root, there’re wp-admin, wp-content, wp-includes folders and the WordPress files.

Do not edit or delete source files and folders, the ones which come from the core. The website might not function properly or at all.


### 1) Root

You’ll find `wp-config.php` which we already know about. There are also **the other .php files** used to the WordPress core. Do not ever delete them. Moreover, some could be edited such as .htaccess (for paths during your transfer to your host), robots.txt or sitemap.xml...

### 2) wp-admin

It contains the complete admin file  set of the website. Do not edit files within this folder. 

### 3) wp-includes
It contains the complete core file set of the website (classes, functions, scripts, …). Do not edit files within this folder. 

### 4) wp-content
In this folder, every change and customizations on your website are applied. It contains these following folders :
- **themes**, 
- **plugins**
- **uploads** (the media files) 
- **languages folders** 
- **upgrade** (used for updating themes and plugins)

The **index.php** file is used exclusively for the wp-content security. This empty file allows to display a blank page instead of the site tree structure in case of malfunction. You’ll find it in different folders.


----

- [03. The dashboard](intro-02.filesstructure.md)

