<?php

namespace Montross50\UptimeRobotApi;

use GuzzleHttp\Client;
use Http\Client\HttpClient;
use Http\Message\MessageFactory\GuzzleMessageFactory;
use Psr\Http\Message\RequestInterface;

class UptimeRobotClient implements HttpClient
{
    /**
     * @var HttpClient
     */
    private $httpClient;
    
    public function __construct($options = [])
    {
        $messageFactory = new GuzzleMessageFactory();
        $client = new \Http\Adapter\Guzzle5\Client(new Client($options),$messageFactory);
        
        $this->httpClient = $client;
    }
    
    /**
     * (@inheritdoc}
     */
    public function sendRequest(RequestInterface $request)
    {
        return $this->httpClient->sendRequest($request);
    }
    
}
