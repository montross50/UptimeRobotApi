<?php

namespace Montross50\UptimeRobotApi\SDK\Model;

class MonitorArray
{
    /**
     * 
     *
     * @var Monitor[]
     */
    protected $monitor;
    /**
     * 
     *
     * @return Monitor[]
     */
    public function getMonitor() : ?array
    {
        return $this->monitor;
    }
    /**
     * 
     *
     * @param Monitor[] $monitor
     *
     * @return self
     */
    public function setMonitor(?array $monitor) : self
    {
        $this->monitor = $monitor;
        return $this;
    }
}