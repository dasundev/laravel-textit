<?php
/**
 * Created by PhpStorm.
 * Author: Dasun Tharanga ( @dasundev )
 * Email: hello@dasun.dev
 * Date: 2021-12-01
 * Time: 9:22 PM
 */

return [
    /*
    |--------------------------------------------------------------------------
    | ID
    |--------------------------------------------------------------------------
    |
    | The textit account ID that you need to authorize your account.
    |
    |
    */

    'id' => env('TEXTIT_ACCOUNT_ID', ''),

    /*
    |--------------------------------------------------------------------------
    | Password
    |--------------------------------------------------------------------------
    |
    | The textit account password that you need to authorize your account.
    |
    |
    */

    'pw' => env('TEXTIT_ACCOUNT_PASSWORD', ''),

    /*
    |--------------------------------------------------------------------------
    | Custom Sender ID
    |--------------------------------------------------------------------------
    |
    | Pre‐registered custom Sender ID (case sensitive)
    |
    |
    */

    'from' => env('TEXTIT_CUSTOM_SENDER_ID', ''),

    /*
    |--------------------------------------------------------------------------
    | Economy Route
    |--------------------------------------------------------------------------
    |
    | Selects economy route to send messages
    |
    |
    */

    'eco' => env('TEXTIT_ECO', ''),

    /*
    |--------------------------------------------------------------------------
    | Reply Mobile Number
    |--------------------------------------------------------------------------
    |
    | Replies forwarded to the registered mobile number
    |
    |
    */

    'reply' => env('TEXTIT_REPLY_NUMBER', ''),

    /*
    |--------------------------------------------------------------------------
    | Reply URL
    |--------------------------------------------------------------------------
    |
    | Replies will be posted to the given url
    |
    |
    */

    'url' => env('TEXTIT_REPLY_URL', ''),
];
