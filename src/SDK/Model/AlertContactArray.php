<?php

namespace Montross50\UptimeRobotApi\SDK\Model;

class AlertContactArray
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
     * @var list<AlertContact>
     */
    protected $alertcontact;
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