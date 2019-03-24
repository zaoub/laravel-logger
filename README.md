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

Go to [127.0.0.1:8000/zlogger](http://127.0.0.1:8000/zlogger/)