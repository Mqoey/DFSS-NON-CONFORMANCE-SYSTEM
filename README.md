# Non-Conformance system

## Installation
Follow these steps to install the application.

1. Clone the Repository

```
https://github.com/Mqoey/DFSS-NON-CONFORMANCE-SYSTEM.git

```
2. Go to project directory

```
cd DFSS-NON-CONFORMANCE-SYSTEM

```

3. Install packages with composer

```
composer install

```

4. Create your database and name it dfss

5. Rename .env.example to .env Or copy it and paste at project root directory and name the file .env.You can also use this command.

```
cp .env.example ./.env

```
6. Generate app key with this command
```
php artisan key:generate

```

7. Set database connection to your database in the .env file.

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=dfss
DB_USERNAME=root
DB_PASSWORD=

```
8. Import sql file in the db folder, or run migrations
   Use this command to run migrations and seeders

```
php artisan migrate --seed

```
9. Start the local server and browser to your app.
   This command will start the development server
```
php artisan serve

```

10. Open the address in the terminal in your browser.Usually address is usually like this:
```
http://127.0.0.1:8000

```
11. Enjoy and make sure to star the repo :).Report bugs,features and also send your pull requests I will be happy to merge them.

### Superadmin login credentials

```
 email: superadmin@mail.com
 password: superadmin
```
