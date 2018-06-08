<?php

namespace Montross50\UptimeRobotApi;

use Montross50\UptimeRobotApi\SDK\Client;

class UptimeRobotManager implements UptimeRobotResourceInterface
{
    
    const FETCH_OBJECT = 'object';
    /**
     * @var Client
     */
    private $api;
    private $apiKey;
    
    /**
     * UptimeRobotManager constructor.
     * @param Client $api
     */
    public function __construct(Client $api)
    {
        $this->api = $api;
    }
    
    /**
     * @param $name
     * @param $arguments
     * @return mixed
     */
    /**
     * @inheritDoc
     */
    public function getAccountDetails(array $parameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        $parameters = $this->mergeApiKey($parameters);
        
        return $this->api->getAccountDetails($parameters, $fetch);
    }
    
    /**
     * @inheritDoc
     */
    public function getMonitors(array $parameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        $parameters = $this->mergeApiKey($parameters);
        
        return $this->api->getMonitors($parameters, $fetch);
    }
    
    /**
     * @inheritDoc
     */
    public function createMonitor(array $parameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        $parameters = $this->mergeApiKey($parameters);
        
        return $this->api->createMonitor($parameters, $fetch);
    }
    
    /**
     * @inheritDoc
     */
    public function deleteMonitor(array $parameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        $parameters = $this->mergeApiKey($parameters);
        
        return $this->api->deleteMonitor($parameters, $fetch);
    }
    
    /**
     * @inheritDoc
     */
    public function editMonitor(array $parameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        $parameters = $this->mergeApiKey($parameters);
        
        return $this->api->editMonitor($parameters, $fetch);
    }
    
    /**
     * @inheritDoc
     */
    public function getAlertContacts(array $parameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        $parameters = $this->mergeApiKey($parameters);
        
        return $this->api->getAlertContacts($parameters, $fetch);
    }
    
    /**
     * @inheritDoc
     */
    public function newAlertContact(array $parameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        $parameters = $this->mergeApiKey($parameters);
        
        return $this->api->newAlertContact($parameters, $fetch);
    }
    
    /**
     * @inheritDoc
     */
    public function deleteAlertContact(array $parameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        $parameters = $this->mergeApiKey($parameters);
        
        return $this->api->deleteAlertContact($parameters, $fetch);
    }

    /**
     * @inheritDoc
     */
    public function resetMonitor(array $parameters = array(), string $fetch = self::FETCH_OBJECT)
    {
        $parameters = $this->mergeApiKey($parameters);

        return $this->api->resetMonitor($parameters, $fetch);
    }


    /**
     * @return UptimeRobotResource
     */
    public function getApi()
    {
        return $this->api;
    }
    
    /**
     * @param UptimeRobotResource $api
     */
    public function setApi($api)
    {
        $this->api = $api;
    }
    
    /**
     * @return mixed
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }
    
    /**
     * @param mixed $apiKey
     */
    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;
    }
    
    /**
     * @param $parameters
     * @return mixed
     */
    public function mergeApiKey($parameters)
    {
        if (! isset($parameters['apiKey'])) {
            $parameters['apiKey'] = $this->getApiKey();
        }
        
        return $parameters;
    }
}
