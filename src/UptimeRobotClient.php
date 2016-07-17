<?php

namespace Montross50\UptimeRobotApi;

use GuzzleHttp\Client;
use GuzzleHttp\Message\MessageFactory;
use Http\Client\HttpClient;
use Psr\Http\Message\RequestInterface;

class UptimeRobotClient implements HttpClient
{
    /**
     * @var HttpClient
     */
    private $httpClient;
    
    public function __construct($options = [])
    {
        $messageFactory = new MessageFactory();
        $client = new Client($messageFactory, $options);
        
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
