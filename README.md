# S30 Users API
> A simple laravel application that retrieves and saves a user's fullname and email address.

### Available endpoints
Base url by default: `http://127.0.0.1:8000`
| Method | Route  |  Description 
| ------ | ------ | ------------------- |
| GET  | `/api/posts` | fetch all users |
| POST | `/api/posts` | add a new user  |


### Installation
Clone this Github repository using the repository url.
```sh
git clone REPOSITORY_URL
```

Clone this Github repository using the repository url.
```sh
cd into your project
```

Install Composer Dependencies
```sh
composer install
```

Copy `.env.example` file to `.env` on the root folder. 
```sh
cp .env.example .env
```

Generate an app encryption key
```sh
php artisan key:generate
```

Create an empty database for the application and add database information to allow Laravel to connect to the database. 

Migrate the database
```sh
php artisan migrate
```

Seed the database
```sh
php artisan db:seed
```

Serve the application
```sh
php artisan serve
```
