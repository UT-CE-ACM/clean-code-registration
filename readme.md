## Clean Code Registration
Clean Code is a contest that is published by ACM group in University of Tehran

## Deploying Project

After cloning project run following commands:
````
$ composer install
````
Then create a mysql database and name it '*clean_code*'
Then run following command:
````
$ php artisan migrate
````
Now with command below, the project will be served in port 8000:
````
$ php artisan serve
````