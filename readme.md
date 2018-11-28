# WEB3 PROJECT - [HENTGES Thibault](https://thentges.github.io/) & Hafizh Ahmad Zuhdi
## LARAVEL VERSION : 5.7.13

### initial setup, installations steps
- you need a mysql server (local or distant)
- download and install composer on your machine
- clone the repository
- browse to the cloned repository directory using command line
- install dependencies by typing:
    ```composer install``` <br/>
    or, if composer is not installed globally on your machine:
    ```php path/to/your/composer.phar install```
- copy file ```.env.example``` in a new ```.env``` file
- generate a key:  ```php artistan key:generate```
- replace the values of the database parameters in the newly created .env file with your local values

### run the server
type  ```php artisan serve``` <br/>
the webserver is now running in development mode on the port 8000 of your local machine!<br>
[Try accessing the Home page](http://127.0.0.1:8000/)

### useful commands
- ```php artisan migrate:fresh --seed``` will drop current database, create the updated schema, and populate it with random data to work with
- run the tests: ```./vendor/bin/phpunit```
