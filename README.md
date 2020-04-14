# Laravel Publishable

Laravel package to log CRUD operations.


## Installation

Add the package to your Laravel app using composer

```
composer require codetech/laravel-loggable
```


### Service Provider

Register the package's service provider in config/app.php. In Laravel versions 5.5 and beyond, this step can be skipped if package auto-discovery is enabled.

```
'providers' => [

    ...
    CodeTech\Loggable\Providers\LoggableServiceProvider::class,
    ...

];
```


### Migrations

Execute the next Artisan command to run the migrations.

```
php artisan migrate

```


## How to use

To start logging CRUD operations simply use the trait on your models.

```
class Post extends Model
{
    use Loggable;

    ...
```
