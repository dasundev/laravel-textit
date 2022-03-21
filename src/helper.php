<?php
/**
 * Created by PhpStorm.
 * Author: Dasun Tharanga ( @dasundev )
 * Email: hello@dasun.dev
 * Date: 2022-03-21
 * Time: 1:10 PM
 */

use Dasundev\LaravelTextit\Textit;

if (! function_exists('textit')) {
    function textit(): Textit
    {
        return new Textit;
    }
}

