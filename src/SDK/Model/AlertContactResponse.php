<?php

namespace Montross50\UptimeRobotApi\SDK\Model;

class AlertContactResponse
{
    /**
     * @var string
     */
    protected $stat;
    /**
     * @var AlertContact
     */
    protected $alertcontact;
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
     * @return AlertContact
     */
    public function getAlertcontact()
    {
        return $this->alertcontact;
    }
    /**
     * @param AlertContact $alertcontact
     *
     * @return self
     */
    public function setAlertcontact(AlertContact $alertcontact = null)
    {
        $this->alertcontact = $alertcontact;
        return $this;
    }
}