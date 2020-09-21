<?php

namespace Montross50\UptimeRobotApi\SDK\Model;

class Account
{
    /**
     *
     *
     * @var string
     */
    protected $monitorLimit;
    /**
     *
     *
     * @var string
     */
    protected $monitorInterval;
    /**
     *
     *
     * @var string
     */
    protected $upMonitors;
    /**
     *
     *
     * @var string
     */
    protected $downMonitors;
    /**
     *
     *
     * @var string
     */
    protected $pausedMonitors;
    /**
     *
     *
     * @return string
     */
    public function getMonitorLimit() : string
    {
        return $this->monitorLimit;
    }
    /**
     *
     *
     * @param string $monitorLimit
     *
     * @return self
     */
    public function setMonitorLimit(string $monitorLimit) : self
    {
        $this->monitorLimit = $monitorLimit;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getMonitorInterval() : string
    {
        return $this->monitorInterval;
    }
    /**
     *
     *
     * @param string $monitorInterval
     *
     * @return self
     */
    public function setMonitorInterval(string $monitorInterval) : self
    {
        $this->monitorInterval = $monitorInterval;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getUpMonitors() : string
    {
        return $this->upMonitors;
    }
    /**
     *
     *
     * @param string $upMonitors
     *
     * @return self
     */
    public function setUpMonitors(string $upMonitors) : self
    {
        $this->upMonitors = $upMonitors;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getDownMonitors() : string
    {
        return $this->downMonitors;
    }
    /**
     *
     *
     * @param string $downMonitors
     *
     * @return self
     */
    public function setDownMonitors(string $downMonitors) : self
    {
        $this->downMonitors = $downMonitors;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getPausedMonitors() : string
    {
        return $this->pausedMonitors;
    }
    /**
     *
     *
     * @param string $pausedMonitors
     *
     * @return self
     */
    public function setPausedMonitors(string $pausedMonitors) : self
    {
        $this->pausedMonitors = $pausedMonitors;
        return $this;
    }
}
