# Laravel Todo App Task

This is a simple Todo app for test.

## Installation

Clone the repository-


Then cd into the folder with this command-
```
cd todo-app
```

Then do a composer install
```
composer install
```

Then create a environment file using this command-
```
cp .env.example .env
```

Then edit `.env` file with appropriate credential for your database server. Edit these two parameter(`DB_USERNAME`, `DB_PASSWORD`).

Then create a database named `todo_app` and then do a database migration using this command-
```
php artisan migrate
```

At last generate application key, which will be used for password hashing, session and cookie encryption etc.
```
php artisan key:generate
```

## Run server

Run server using this command-
```
php artisan serve
```

Then go to `http://localhost:8000` from your browser and see the app.



