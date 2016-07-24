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
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @param string $id
     *
     * @return self
     */
    public function setId($id = null)
    {
        $this->id = $id;
        return $this;
    }
    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }
    /**
     * @param string $message
     *
     * @return self
     */
    public function setMessage($message = null)
    {
        $this->message = $message;
        return $this;
    }
}