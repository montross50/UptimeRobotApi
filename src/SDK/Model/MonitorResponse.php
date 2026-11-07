<?php

namespace Montross50\UptimeRobotApi\SDK\Model;

class MonitorResponse
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
    protected $stat;
    /**
     * @var Monitor
     */
    protected $monitor;
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $message;
    /**
     * @return string
     */
    public function getStat(): string
    {
        return $this->stat;
    }
    /**
     * @param string $stat
     *
     * @return self
     */
    public function setStat(string $stat): self
    {
        $this->initialized['stat'] = true;
        $this->stat = $stat;
        return $this;
    }
    /**
     * @return Monitor
     */
    public function getMonitor(): Monitor
    {
        return $this->monitor;
    }
    /**
     * @param Monitor $monitor
     *
     * @return self
     */
    public function setMonitor(Monitor $monitor): self
    {
        $this->initialized['monitor'] = true;
        $this->monitor = $monitor;
        return $this;
    }
    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }
    /**
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message): self
    {
        $this->initialized['message'] = true;
        $this->message = $message;
        return $this;
    }
}