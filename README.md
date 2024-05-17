<p align="center">Laravel Send Email using Gmail SMTP</p>

## Download the code

- git clone the code

## Make Gmail Configuration

Make sure you must open your Gmail account then follow step 1 from 6. Finally copy password (Show Figure-1) for use setup .env file.

## Update SMTP Details and Database in .env File
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret

MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=yourgmail@gmail.com
MAIL_PASSWORD="xxxx xxxx xxxx xxxx"
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=yourgmail@gmail.com
MAIL_FROM_NAME="${APP_NAME}"
```
### Install laravel
- composer install
- php artisan queue:table
- php artisan migrate

## Run Laravel App

php artisan serve

## Test send mail

Now, go to your web browser, type the given URL and view the app output
http://localhost:8000
