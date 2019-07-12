## Laravel Docker Starter

Laravel Docker Starter is project to facilitate create new project, 
we don't need to work hard, to do the initial configuration

##### Step to use this project :

- git clone [https://github.com/syifandimulyanto/laravel-docker-starter.git](https://github.com/syifandimulyanto/laravel-docker-starter)
- cp .env.example .env
- docker-compose up -d
- docker ps ( show list docker container )
- docker-compose exec app nano .env ( update .env file )
- docker-compose exec app php artisan key:generate
- docker-compose exec app php artisan config:cache
- docker-compose exec app php artisan migrate

After follow the step by step, the project already running in [http://localhost]()

#### Testing

```bash
$ docker-compose exec app vendor/bin/phpunit
```

##### Refrence Create Docker Configuration

- https://www.digitalocean.com/community/tutorials/how-to-set-up-laravel-nginx-and-mysql-with-docker-compose

## Passport Installing

Laravel passport reference [https://laravel.com/docs/5.8/passport]

- docker-compose exec app composer require laravel/passport

To custom migration file :
- docker-compose exec app php artisan vendor:publish --tag=passport-migrations

- docker-compose exec app php artisan migrate
- docker-compose exec app php artisan passport:install

Passport Using client password
- docker-compose exec app php artisan passport:client --password