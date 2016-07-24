<?php

namespace Montross50\UptimeRobotApi;

use Montross50\UptimeRobotApi\SDK\Resource\UptimeRobotResource;

class UptimeRobotManager implements UptimeRobotResourceInterface {
    
    const FETCH_OBJECT = 'object';
    /**
     * @var UptimeRobotResource
     */
    private $api;
    private $apiKey;
    
    /**
     * UptimeRobotManager constructor.
     * @param UptimeRobotResource $api
     */
    public function __construct(UptimeRobotResource $api)
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
    public function getAccountDetails($parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $parameters = $this->mergeApiKey($parameters);
        
        return $this->api->getAccountDetails($parameters, $fetch);
    }
    
    /**
     * @inheritDoc
     */
    public function getMonitors($parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $parameters = $this->mergeApiKey($parameters);
        
        return $this->api->getMonitors($parameters, $fetch);
    }
    
    /**
     * @inheritDoc
     */
    public function createMonitor($parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $parameters = $this->mergeApiKey($parameters);
        
        return $this->api->createMonitor($parameters, $fetch);
    }
    
    /**
     * @inheritDoc
     */
    public function deleteMonitor($parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $parameters = $this->mergeApiKey($parameters);
        
        return $this->api->deleteMonitor($parameters, $fetch);
    }
    
    /**
     * @inheritDoc
     */
    public function editMonitor($parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $parameters = $this->mergeApiKey($parameters);
        
        return $this->api->editMonitor($parameters, $fetch);
    }
    
    /**
     * @inheritDoc
     */
    public function getAlertContacts($parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $parameters = $this->mergeApiKey($parameters);
        
        return $this->api->getAlertContacts($parameters, $fetch);
    }
    
    /**
     * @inheritDoc
     */
    public function newAlertContact($parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $parameters = $this->mergeApiKey($parameters);
        
        return $this->api->newAlertContact($parameters, $fetch);
    }
    
    /**
     * @inheritDoc
     */
    public function deleteAlertContact($parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $parameters = $this->mergeApiKey($parameters);
        
        return $this->api->deleteAlertContact($parameters, $fetch);
    }

    /**
     * @inheritDoc
     */
    public function resetMonitor($parameters = array(), $fetch = self::FETCH_OBJECT)
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
        if ( ! isset($parameters['apiKey']) ) {
            $parameters['apiKey'] = $this->getApiKey();
        }
        
        return $parameters;
    }
    
    
}
