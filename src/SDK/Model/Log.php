<?php

namespace Montross50\UptimeRobotApi\SDK\Model;

class Log
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
    protected $type;
    /**
     * @var string
     */
    protected $datetime;
    /**
     * @var list<AlertContact>
     */
    protected $alertcontact;
    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * @return string
     */
    public function getDatetime(): string
    {
        return $this->datetime;
    }
    /**
     * @param string $datetime
     *
     * @return self
     */
    public function setDatetime(string $datetime): self
    {
        $this->initialized['datetime'] = true;
        $this->datetime = $datetime;
        return $this;
    }
    /**
     * @return list<AlertContact>
     */
    public function getAlertcontact(): array
    {
        return $this->alertcontact;
    }
    /**
     * @param list<AlertContact> $alertcontact
     *
     * @return self
     */
    public function setAlertcontact(array $alertcontact): self
    {
        $this->initialized['alertcontact'] = true;
        $this->alertcontact = $alertcontact;
        return $this;
    }
}