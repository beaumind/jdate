# jdate
A simple Laravel Wrapper for the jdate functions.

## Installation

Run the Composer update comand

    $ composer require beaumind/jdate

In your `config/app.php` add `'Beaumind\Jdate\JDateServiceProvider'` to the end of the `$providers` array

```php
'providers' => [

    Illuminate\Foundation\Providers\ArtisanServiceProvider::class,
    Illuminate\Auth\AuthServiceProvider::class,
    ...
    Beaumind\Jdate\JDateServiceProvider::class,

],


'alias' => [
    ...
    'jDate' => Beaumind\Jdate\Facades\JDate::class
]
```
