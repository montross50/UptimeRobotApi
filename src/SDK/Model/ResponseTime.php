<?php

namespace Montross50\UptimeRobotApi\SDK\Model;

class ResponseTime
{
    /**
     * 
     *
     * @var string
     */
    protected $value;
    /**
     * 
     *
     * @var string
     */
    protected $datetime;
    /**
     * 
     *
     * @return string
     */
    public function getValue() : ?string
    {
        return $this->value;
    }
    /**
     * 
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(?string $value) : self
    {
        $this->value = $value;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDatetime() : ?string
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
    public function setDatetime(?string $datetime) : self
    {
        $this->datetime = $datetime;
        return $this;
    }
}