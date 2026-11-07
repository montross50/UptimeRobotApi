<?php

namespace Montross50\UptimeRobotApi\SDK\Model;

class MonitorArray
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
     * @var list<Monitor>
     */
    protected $monitor;
    /**
     * @return list<Monitor>
     */
    public function getMonitor(): array
    {
        return $this->monitor;
    }
    /**
     * @param list<Monitor> $monitor
     *
     * @return self
     */
    public function setMonitor(array $monitor): self
    {
        $this->initialized['monitor'] = true;
        $this->monitor = $monitor;
        return $this;
    }
}