# laravel-logger
View logs of errors that occur during playback.

## Install via composer
```bash
$ composer require zaoub/laravel-logger dev-master
```

## Publish
```bash
$ php artisan vendor:publish --provider="Zaoub\Laravel\Support\ServiceProvider" --tag="public"
```

## In local
Access is available to everyone

## In production
If you are on production you need to login. Then, specify the email address that you can access within a `.env` file

```env
ZAOUB_ZLL_ACCESS="admin@mail.com,supervisor@mail.com"
```
> You can select more than one mail with a comma

Go to [127.0.0.1:8000/zll](http://127.0.0.1:8000/zll)