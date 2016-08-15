<?php

namespace Montross50\UptimeRobotApi\SDK\Model;

class AlertContact
{
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
    public function getValue()
    {
        return $this->value;
    }
    /**
     * @param string $value
     *
     * @return self
     */
    public function setValue($value = null)
    {
        $this->value = $value;
        return $this;
    }
    /**
     * @return string
     */
    public function getFriendlyname()
    {
        return $this->friendlyname;
    }
    /**
     * @param string $friendlyname
     *
     * @return self
     */
    public function setFriendlyname($friendlyname = null)
    {
        $this->friendlyname = $friendlyname;
        return $this;
    }
    /**
     * @return string
     */
    public function getThreshold()
    {
        return $this->threshold;
    }
    /**
     * @param string $threshold
     *
     * @return self
     */
    public function setThreshold($threshold = null)
    {
        $this->threshold = $threshold;
        return $this;
    }
    /**
     * @return string
     */
    public function getRecurrence()
    {
        return $this->recurrence;
    }
    /**
     * @param string $recurrence
     *
     * @return self
     */
    public function setRecurrence($recurrence = null)
    {
        $this->recurrence = $recurrence;
        return $this;
    }
}