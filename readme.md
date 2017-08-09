# WDA-assign-01

#Steps to take

```
 composer install
```
 
```
 php artisan migrate
```

## Ensure .env file is properly configured

If your .env file is missing copy .env.example and rename to .env


## Run this command after you have created your .env file

```
php artisan key:generate 
```

After that is done, copy the generated key and paste it into 

```
APP_KEY=
```