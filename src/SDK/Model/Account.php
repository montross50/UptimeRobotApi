<?php

namespace Montross50\UptimeRobotApi\SDK\Model;

class Account
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
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
    public function getMonitorLimit(): string
    {
        return $this->monitorLimit;
    }
    /**
     * @param string $monitorLimit
     *
     * @return self
     */
    public function setMonitorLimit(string $monitorLimit): self
    {
        $this->initialized['monitorLimit'] = true;
        $this->monitorLimit = $monitorLimit;
        return $this;
    }
    /**
     * @return string
     */
    public function getMonitorInterval(): string
    {
        return $this->monitorInterval;
    }
    /**
     * @param string $monitorInterval
     *
     * @return self
     */
    public function setMonitorInterval(string $monitorInterval): self
    {
        $this->initialized['monitorInterval'] = true;
        $this->monitorInterval = $monitorInterval;
        return $this;
    }
    /**
     * @return string
     */
    public function getUpMonitors(): string
    {
        return $this->upMonitors;
    }
    /**
     * @param string $upMonitors
     *
     * @return self
     */
    public function setUpMonitors(string $upMonitors): self
    {
        $this->initialized['upMonitors'] = true;
        $this->upMonitors = $upMonitors;
        return $this;
    }
    /**
     * @return string
     */
    public function getDownMonitors(): string
    {
        return $this->downMonitors;
    }
    /**
     * @param string $downMonitors
     *
     * @return self
     */
    public function setDownMonitors(string $downMonitors): self
    {
        $this->initialized['downMonitors'] = true;
        $this->downMonitors = $downMonitors;
        return $this;
    }
    /**
     * @return string
     */
    public function getPausedMonitors(): string
    {
        return $this->pausedMonitors;
    }
    /**
     * @param string $pausedMonitors
     *
     * @return self
     */
    public function setPausedMonitors(string $pausedMonitors): self
    {
        $this->initialized['pausedMonitors'] = true;
        $this->pausedMonitors = $pausedMonitors;
        return $this;
    }
}