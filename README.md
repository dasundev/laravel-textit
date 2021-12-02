## Laravel Textit

Laravel Textit will help you to integrate your sms 
gateway very easily on your laravel application.

### Installation

You can install this package via composer:
```bash
composer require dasundev/laravel-textit
```
You can publish the config file with:
```bash
php artisan vendor:publish --provider="Dasundev\LaravelTextit\TextitServiceProvider" --tag="config"
```
### ENV Keys

Add following environment keys to your .env file. then 
replace with your Account ID & Password. 

```dotenv
TEXTIT_ACCOUNT_ID=94XXXXXXXXXX
TEXTIT_ACCOUNT_PASSWORD=password
```
Optional environment keys. 

```dotenv
TEXTIT_CUSTOM_SENDER_ID=Textit
TEXTIT_ECO=Y
TEXTIT_REPLY_NUMBER=07XXXXXXXX
TEXTIT_REPLY_URL=https://your-domain.com/textit/replies
```

### Usage

1. Send message to a user.
```php
Textit::sendSMS('07XXXXXXXX', 'Your order has been delivered!');
```
2. Check your textit account balance.
```php
$balance = Textit::checkBalance();
```
### License

Copyright © Dasun Tharanga

Laravel Textit is open-sourced software licensed under the MIT license.

