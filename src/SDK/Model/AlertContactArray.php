<?php

namespace Montross50\UptimeRobotApi\SDK\Model;

class AlertContactArray
{
    /**
     * 
     *
     * @var AlertContact[]
     */
    protected $alertcontact;
    /**
     * 
     *
     * @return AlertContact[]
     */
    public function getAlertcontact() : array
    {
        return $this->alertcontact;
    }
    /**
     * 
     *
     * @param AlertContact[] $alertcontact
     *
     * @return self
     */
    public function setAlertcontact(array $alertcontact) : self
    {
        $this->alertcontact = $alertcontact;
        return $this;
    }
}