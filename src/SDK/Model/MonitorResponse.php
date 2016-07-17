<?php

namespace Montross50\UptimeRobotApi\SDK\Model;

class MonitorResponse
{
    /**
     * @var string
     */
    protected $stat;
    /**
     * @var Monitor
     */
    protected $monitor;
    /**
     * @return string
     */
    public function getStat()
    {
        return $this->stat;
    }
    /**
     * @param string $stat
     *
     * @return self
     */
    public function setStat($stat = null)
    {
        $this->stat = $stat;
        return $this;
    }
    /**
     * @return Monitor
     */
    public function getMonitor()
    {
        return $this->monitor;
    }
    /**
     * @param Monitor $monitor
     *
     * @return self
     */
    public function setMonitor(Monitor $monitor = null)
    {
        $this->monitor = $monitor;
        return $this;
    }
}