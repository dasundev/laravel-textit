<?php
/**
 * Created by PhpStorm.
 * Author: Dasun Tharanga ( @dasundev )
 * Email: hello@dasun.dev
 * Date: 2021-12-01
 * Time: 7:50 PM
 */

namespace Dasundev\LaravelTextit;

use GuzzleHttp\Client;

class Textit
{
    /**
     * The textit client
     *
     * @var Client
     */
    private $client;

    /**
     * Create a new Textit instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'https://www.textit.biz'
        ]);
    }

    /**
     * Send a message to the user
     *
     * @param string $to
     * @param string $message
     * @return string
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function sendSMS(string $to, string $message): string
    {
        $response = $this->client->get('sendmsg', [
            'query' => [
                'id' => config('textit.id'),
                'pw' => config('textit.pw'),
                'to' => $to,
                'text' => $message
            ]
        ]);

        $result = explode(":", (string) $response->getBody());

        if (trim($result[0]) == "OK") {
            return "Message sent - Result: " . $result[1];
        } else {
            return "Sent Failed - Error: " . $result[1];
        }
    }

    /**
     * Check textit account balance
     *
     * @return float
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function checkBalance(): float
    {
        $response = $this->client->get('creditchk', [
            'query' => [
                'id' => config('textit.id'),
                'pw' => config('textit.pw')
            ]
        ]);

        return (float) (string) $response->getBody();
    }
}
