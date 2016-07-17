<?php

namespace Montross50\UptimeRobotApi\SDK\Model;

class Log
{
    /**
     * @var string
     */
    protected $type;
    /**
     * @var string
     */
    protected $datetime;
    /**
     * @var AlertContact[]
     */
    protected $alertcontact;
    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * @param string $type
     *
     * @return self
     */
    public function setType($type = null)
    {
        $this->type = $type;
        return $this;
    }
    /**
     * @return string
     */
    public function getDatetime()
    {
        return $this->datetime;
    }
    /**
     * @param string $datetime
     *
     * @return self
     */
    public function setDatetime($datetime = null)
    {
        $this->datetime = $datetime;
        return $this;
    }
    /**
     * @return AlertContact[]
     */
    public function getAlertcontact()
    {
        return $this->alertcontact;
    }
    /**
     * @param AlertContact[] $alertcontact
     *
     * @return self
     */
    public function setAlertcontact(array $alertcontact = null)
    {
        $this->alertcontact = $alertcontact;
        return $this;
    }
}