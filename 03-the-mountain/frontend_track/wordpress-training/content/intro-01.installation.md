# WordPress installation and some basis

## 1. Set up your environment

> Before installation, check for the last apt-get or apt update on Ubuntu.

To use WordPress, it's recommended to install a HTTP server, Apache or Nginx.

You also need to have PHP and MySQL (or MariaDB) & a Database manager (Workbench, phpMyAdmin...). 

Here, we will present 5 possibilities to set up your environment.


### 1.1. Docker 🐋

> ⚠️ before to choose this possibility, you should have already followed a (short) training about Docker

You need a container Docker containing Apache or Nginx, PHP & MySQL.

We have an environment ready for you in this [Github template](https://github.com/NicolasJamar/docker-env-php-wordpress). You can fork it and follow the instructions.

After the installation, you can directly [create the database](#3-the-database--wp-configphp).


### 1.2. XAMPP

XAMPP is an abbreviation for cross-platform, Apache, MySQL, PHP and Perl, and it allows you to build WordPress site offline, on a local web server on your computer. 

[XAMPP](https://www.apachefriends.org/download.html). 

Once downloaded, go in your downloads directory and run the command to change the access to the package. For example :  


```sudo chmod 755 xampp-linux-x64-8.0.0-1-installer.run```

Then, run the installation : 

```sudo ./xampp-linux-x64-8.0.0-1-installer.run``` 

And it's done !  

XAMPP had created the directory ```/opt/lampp/htdocs``` 

It remains to give it write rights :


```sudo chmod -R 755 /opt/lampp/htdocs```

Now, you can start your server :

```sudo /opt/lampp/lampp start```

![alt text](../images/optstart.png)

*If you got the error "Web server already running", check what is running on ports 80 and 443.*

To open your local server in your browser, go on http://localhost

*This is the minimum config. To configure and secure more, I'll let you know*


### 1.3. Laragon

For the Windows users only, it's like a Xampp stack with steroïds.

This nice tool allow you to install many environments (WordPress, Symfony, Laravel...) with just some clicks : [Laragon](https://laragon.org/)


### 1.4. Local by Flywheel

A pre-made tool which contains everything you’ll need to set up and use local sites : https://localwp.com/


### 1.5. LAMP

Do you already have Apache, PHP, MySQL & a database manager (a LAMP stack) on your PC? You can already install WordPress in your local server and work with it !

If not yet installed, you can follow these instructions one by one : [LAMP](https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-on-ubuntu-20-04)



## 2. Install WordPress

1. Download WorpdPress on the official website : https://wordpress.org/download/ 

2. Unzip and move the directory `ẁordpress` in your repository. If you use Xampp, your repo should be in the `htdocs directory. For Docker, in the `src/public` folder.  

3. Rename the `wordpress` directory with the name of your futur website, for example : `firstWordPress`


## 3. The database & wp-config.php

### 1. Before to start WordPress, you must create a database. 

If you use Docker, go on [http://localhost:8001](http://localhost:8001)

If you use Xampp, go on [http://localhost/phpmyadmin/](http://localhost/phpmyadmin/)

Add a new database.

Example :  

- Database name : `firstWordPress` 
- Interclassent : `utf8_unicode_ci`

### 2. Configure wp-config.php

In your WordPress directory, open the file `wp-config.php` and change the informations for the connection with your DB.

If is not done by default, rename the file `wp-config-sample.php` in `wp-config.php`

For example :

```php
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'firstWordPress');

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );
```


> 👉 To allow plugins to be installed on Linux, you may write the following line in your `wp-config.php` file : `define('FS_METHOD','direct');`


## 4. Terminate the installation

In your browser, go to `localhost` or `localhost/firstWordPress`(if you use Xampp).

Normally, the WordPress installation starts up and it ask you to provide your informations, especially regarding the database configuration :

- Database name 
- Database username (by default it's root)
- Password
- The database adress
- Database prefix : not necessary to change


## 5. WordPress connection

Write down your login details somewhere. We quickly forget...

-----

[02. The WordPress files and folders organisation](intro-02.filesstructure.md)
