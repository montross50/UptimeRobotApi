<?php

namespace Montross50\UptimeRobotApi\SDK\Model;

class AlertContact
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
    protected $id;
    /**
     * @var string
     */
    protected $type;
    /**
     * @var string
     */
    protected $value;
    /**
     * @var string
     */
    protected $friendlyname;
    /**
     * @var string
     */
    protected $threshold;
    /**
     * @var string
     */
    protected $recurrence;
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
    public function getValue(): string
    {
        return $this->value;
    }
    /**
     * @param string $value
     *
     * @return self
     */
    public function setValue(string $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
    /**
     * @return string
     */
    public function getFriendlyname(): string
    {
        return $this->friendlyname;
    }
    /**
     * @param string $friendlyname
     *
     * @return self
     */
    public function setFriendlyname(string $friendlyname): self
    {
        $this->initialized['friendlyname'] = true;
        $this->friendlyname = $friendlyname;
        return $this;
    }
    /**
     * @return string
     */
    public function getThreshold(): string
    {
        return $this->threshold;
    }
    /**
     * @param string $threshold
     *
     * @return self
     */
    public function setThreshold(string $threshold): self
    {
        $this->initialized['threshold'] = true;
        $this->threshold = $threshold;
        return $this;
    }
    /**
     * @return string
     */
    public function getRecurrence(): string
    {
        return $this->recurrence;
    }
    /**
     * @param string $recurrence
     *
     * @return self
     */
    public function setRecurrence(string $recurrence): self
    {
        $this->initialized['recurrence'] = true;
        $this->recurrence = $recurrence;
        return $this;
    }
}