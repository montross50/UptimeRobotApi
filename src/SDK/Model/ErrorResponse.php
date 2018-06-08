<?php

namespace Montross50\UptimeRobotApi\SDK\Model;

class ErrorResponse
{
    /**
     * 
     *
     * @var string
     */
    protected $stat;
    /**
     * 
     *
     * @var string
     */
    protected $id;
    /**
     * 
     *
     * @var string
     */
    protected $message;
    /**
     * 
     *
     * @return string
     */
    public function getStat() : ?string
    {
        return $this->stat;
    }
    /**
     * 
     *
     * @param string $stat
     *
     * @return self
     */
    public function setStat(?string $stat) : self
    {
        $this->stat = $stat;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getId() : ?string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(?string $id) : self
    {
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getMessage() : ?string
    {
        return $this->message;
    }
    /**
     * 
     *
     * @param string $message
     *
     * @return self
     */
    public function setMessage(?string $message) : self
    {
        $this->message = $message;
        return $this;
    }
}