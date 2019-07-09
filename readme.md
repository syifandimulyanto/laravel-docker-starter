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

##### Refrence Create Docker Configuration

- https://www.digitalocean.com/community/tutorials/how-to-set-up-laravel-nginx-and-mysql-with-docker-compose