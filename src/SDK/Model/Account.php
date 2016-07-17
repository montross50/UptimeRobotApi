<?php

namespace Montross50\UptimeRobotApi\SDK\Model;

class Account
{
    /**
     * @var string
     */
    protected $monitorLimit;
    /**
     * @var string
     */
    protected $monitorInterval;
    /**
     * @var string
     */
    protected $upMonitors;
    /**
     * @var string
     */
    protected $downMonitors;
    /**
     * @var string
     */
    protected $pausedMonitors;
    /**
     * @return string
     */
    public function getMonitorLimit()
    {
        return $this->monitorLimit;
    }
    /**
     * @param string $monitorLimit
     *
     * @return self
     */
    public function setMonitorLimit($monitorLimit = null)
    {
        $this->monitorLimit = $monitorLimit;
        return $this;
    }
    /**
     * @return string
     */
    public function getMonitorInterval()
    {
        return $this->monitorInterval;
    }
    /**
     * @param string $monitorInterval
     *
     * @return self
     */
    public function setMonitorInterval($monitorInterval = null)
    {
        $this->monitorInterval = $monitorInterval;
        return $this;
    }
    /**
     * @return string
     */
    public function getUpMonitors()
    {
        return $this->upMonitors;
    }
    /**
     * @param string $upMonitors
     *
     * @return self
     */
    public function setUpMonitors($upMonitors = null)
    {
        $this->upMonitors = $upMonitors;
        return $this;
    }
    /**
     * @return string
     */
    public function getDownMonitors()
    {
        return $this->downMonitors;
    }
    /**
     * @param string $downMonitors
     *
     * @return self
     */
    public function setDownMonitors($downMonitors = null)
    {
        $this->downMonitors = $downMonitors;
        return $this;
    }
    /**
     * @return string
     */
    public function getPausedMonitors()
    {
        return $this->pausedMonitors;
    }
    /**
     * @param string $pausedMonitors
     *
     * @return self
     */
    public function setPausedMonitors($pausedMonitors = null)
    {
        $this->pausedMonitors = $pausedMonitors;
        return $this;
    }
}