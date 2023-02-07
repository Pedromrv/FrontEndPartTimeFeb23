# DEV env: docker-compose

You have now installed Docker on your computer. Congratulations ! 🥳 Now we will present you your home made environment. 

But firstly, if you are completely new to Docker we recommend you to read the [Docker Survival Guide](https://github.com/becodeorg/cli/tree/develop/docs/docker-survival-guide).


## The environment is here

Have a look at this repo => [DOCKER ENVIRONMENT](https://github.com/Broodco/php_docker_mysql_template). 

For working, you can use this template. 

You have 1 file & 2 folders indise :
- docker-compose.yml
- src
- phpdocker

The `docker-compose.yml` is the configurations file in order to run your containers. 

The `src` folder is your work environment folder where you will code your PHP files. There is already a `index.php` in it. 

The `phpdocker` docker where the configuration of your server lives. There are explanations about the environment & how to use it. 


## Run `docker`

When starting your env for the first time, run the following command in your repo:

	docker compose build
	
> **NOTE:** thus you don't need to run this command each time, it may be useful to *re*build your services when you change the configuration of your services.

Then, simply run the following command to get started:

    docker compose up

The details for all your services is detailed [HERE](https://github.com/Broodco/php_docker_mysql_template/tree/main/phpdocker).

