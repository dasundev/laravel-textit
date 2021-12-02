<?php
/**
 * Created by PhpStorm.
 * Author: Dasun Tharanga ( @dasundev )
 * Email: hello@dasun.dev
 * Date: 2021-12-01
 * Time: 7:47 PM
 */

namespace Dasundev\LaravelTextit\Support\Facades;

use Illuminate\Support\Facades\Facade;

class Textit extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return "textit";
    }
}
