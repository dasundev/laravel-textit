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

    public function testSendMessageUsingFacade()
    {
        $to = "07XXXXXXXX"; //replace with your mobile no
        $text = "Hello! This is a test message from Laravel Textit";

        $result = Textit::sms($to, $text);

        $this->assertIsString($result);
    }

    public function testAccountBalanceUsingFacade()
    {
        $result = Textit::balance();

        $this->assertIsFloat($result);
    }

    public function testSendMessageUsingHelper()
    {
        $to = "07XXXXXXXX"; //replace with your mobile no
        $text = "Hello! This is a test message from Laravel Textit";

        $result = textit()->sms($to, $text);

        $this->assertIsString($result);
    }

    public function testAccountBalanceUsingHelper()
    {
        $result = textit()->balance();

        $this->assertIsFloat($result);
    }

}
