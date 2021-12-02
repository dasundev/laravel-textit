<?php
/**
 * Created by PhpStorm.
 * Author: Dasun Tharanga ( @dasundev )
 * Email: hello@dasun.dev
 * Date: 2021-12-02
 * Time: 10:05 PM
 */


namespace Dasundev\LaravelTextit\Tests;

use Dasundev\LaravelTextit\Support\Facades\Textit;
use Tests\TestCase;

class TextitTest extends TestCase
{

    public function testSendMessage()
    {
        $to = "07XXXXXXXX"; //replace with your mobile no
        $text = "Hello! This is a test message from Laravel Textit";

        $result = Textit::sendSMS($to, $text);

        $this->assertIsString($result);
    }

    public function testAccountBalance()
    {
        $result = Textit::checkBalance();

        $this->assertIsFloat($result);
    }

}
