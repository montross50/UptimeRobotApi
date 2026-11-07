<?php

namespace Montross50\UptimeRobotApi\SDK\Model;

class AlertContactResponse
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
     * @return AlertContact
     */
    public function getAlertcontact(): AlertContact
    {
        return $this->alertcontact;
    }
    /**
     * @param AlertContact $alertcontact
     *
     * @return self
     */
    public function setAlertcontact(AlertContact $alertcontact): self
    {
        $this->initialized['alertcontact'] = true;
        $this->alertcontact = $alertcontact;
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