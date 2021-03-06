<p align="center">
  <img src="https://user-images.githubusercontent.com/54996800/144489365-187dc640-26e5-4d12-9b2b-d19d73f28818.png" alt="Textit Logo" width="400px">
</p>


<p align="center">
<a href="https://packagist.org/packages/dasundev/laravel-textit"><img src="https://img.shields.io/packagist/l/dasundev/laravel-textit" alt="License"></a>
<a href="https://packagist.org/packages/dasundev/laravel-textit"><img src="https://img.shields.io/packagist/dt/dasundev/laravel-textit" alt="Total Downloads"></a>
</p>

# Laravel Textit

Laravel Textit will help you to integrate the Textit SMS 
gateway very easily on your laravel application.

This package has been developed for [https://textit.biz](https://textit.biz/)

Therefore, you must have an active textit account with sufficient balance to send SMS.

## Installation

1. You can install this package via composer:
```bash
composer require dasundev/laravel-textit
```
2. You can publish the config file with:
```bash
php artisan vendor:publish --provider="Dasundev\LaravelTextit\TextitServiceProvider" --tag="config"
```
## ENV Keys

* Add following environment keys to your .env file. then replace with your Account ID & Password. 

```dotenv
TEXTIT_ACCOUNT_ID=94XXXXXXXXX
TEXTIT_ACCOUNT_PASSWORD=1234
```
* Optional environment keys(currently not available). 

```dotenv
TEXTIT_CUSTOM_SENDER_ID=Textit
TEXTIT_ECO=Y
TEXTIT_REPLY_NUMBER=07XXXXXXXX
TEXTIT_REPLY_URL=https://your-domain.com/textit/replies
```

## Usage

* Send message to a user.
```php
Textit::sms('07XXXXXXXX', 'Your order has been delivered!'); // using facade
textit()->sms('07XXXXXXXX', 'Your order has been delivered!'); // using helper function
```
* Check your textit account balance.
```php
$balance = Textit::balance(); // using facade
$balance = textit()->balance(); // using helper function
```
### License

Copyright © Dasun Tharanga

Laravel Textit is open-sourced software licensed under the MIT license.

