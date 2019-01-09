# WEB3 PROJECT - [HENTGES Thibault](https://thentges.github.io/) & [Hafizh Ahmad Zuhdi](https://github.com/hafizhahmadzuhdi)
## LARAVEL VERSION : 5.7.13
*as we can't set up some continous testing on this GitLab, you should always run tests before pushing to the master branch <br> see [testing](#testing) part of this readme*

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
- generate a key:  ```php artisan key:generate```
- replace the values of the database parameters in the newly created .env file with your local values
- generate a jwt key using ```php artisan jwt:secret```
- copy the newly generate value for ```JWT_SECRET``` from ```.env``` to ```.env.testing``` file

### run the server
type  ```php artisan serve``` <br/>
the webserver is now running in development mode on the port 8000 of your local machine!<br>
[Try accessing the Home page](http://127.0.0.1:8000/)

### useful commands
- ```php artisan migrate:fresh --seed``` will drop current database, create the updated schema, and populate it with random data to work with

### access admin
- You need an exist default user before
- type ```php artisan tinker```
- then type the command ```use App\User;```
- last part you need to change the type by using ```User::where('email', 'youruser@mail.com')->update(['type' => 'admin']);```
- So you now have an admin and can login to admin panel

### API usage
You can find the documentation of the API [here](http://127.0.0.1:8000/api/documentation)
The authentication is done using Json Web Token (JWT). You need to login using the ```/api/login``` route to retrieve your token.
Then, you have to submit your token either in query parameter ```token=yourtoken``` or headers ```Authorization: Bearer yourtoken```

### testing
To run the tests, type this command from the root directory: ```./vendor/bin/phpunit``` <br/>
Before running your tests, you need to do these steps once:
- copy file ```.env.testing.example``` in a new ```.env.testing``` file
- fill the ```APP_KEY``` value in the new created file with the one in your  ```.env``` file
- replace the values of the database parameters in the newly created .env.testing file with your testing database values
