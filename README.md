![laravel-loggable-repo-banner](https://user-images.githubusercontent.com/17640929/161713530-72a60c45-68ae-4d9c-8e4c-6cc8657d9bae.jpg)


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


## Usage

To start logging CRUD operations simply use the trait on your models.

```
class Post extends Model
{
    use Loggable;

    ...
```


---


## License

**codetech/laravel-loggable** is open-sourced software licensed under the [MIT license](https://github.com/CodeTechPt/laravel-loggable/blob/master/LICENSE).


## About CodeTech

[CodeTech](https://www.codetech.pt) is a web development agency based on Matosinhos, Portugal. Oh, and we LOVE Laravel!
