<?php

namespace Montross50\UptimeRobotApi\SDK\Model;

class Log
{
    /**
     *
     *
     * @var string
     */
    protected $type;
    /**
     *
     *
     * @var string
     */
    protected $datetime;
    /**
     *
     *
     * @var AlertContact[]
     */
    protected $alertcontact;
    /**
     *
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }
    /**
     *
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type) : self
    {
        $this->type = $type;
        return $this;
    }
    /**
     *
     *
     * @return string
     */
    public function getDatetime() : string
    {
        return $this->datetime;
    }
    /**
     *
     *
     * @param string $datetime
     *
     * @return self
     */
    public function setDatetime(string $datetime) : self
    {
        $this->datetime = $datetime;
        return $this;
    }
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
