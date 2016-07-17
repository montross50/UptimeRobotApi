<?php

namespace Montross50\UptimeRobotApi\SDK\Model;

class Monitor
{
    /**
     * @var string
     */
    protected $id;
    /**
     * @var string
     */
    protected $friendlyname;
    /**
     * @var string
     */
    protected $url;
    /**
     * @var string
     */
    protected $type;
    /**
     * @var string
     */
    protected $subtype;
    /**
     * @var string
     */
    protected $keywordtype;
    /**
     * @var string
     */
    protected $keywordvalue;
    /**
     * @var string
     */
    protected $httpusername;
    /**
     * @var string
     */
    protected $httppassword;
    /**
     * @var string
     */
    protected $port;
    /**
     * @var string
     */
    protected $interval;
    /**
     * @var string
     */
    protected $status;
    /**
     * @var string
     */
    protected $alltimeuptimeratio;
    /**
     * @var string
     */
    protected $customuptimeratio;
    /**
     * @var AlertContact[]
     */
    protected $alertcontact;
    /**
     * @var Log[]
     */
    protected $log;
    /**
     * @var ResponseTime[]
     */
    protected $responsetime;
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
    public function getUrl()
    {
        return $this->url;
    }
    /**
     * @param string $url
     *
     * @return self
     */
    public function setUrl($url = null)
    {
        $this->url = $url;
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
    public function getSubtype()
    {
        return $this->subtype;
    }
    /**
     * @param string $subtype
     *
     * @return self
     */
    public function setSubtype($subtype = null)
    {
        $this->subtype = $subtype;
        return $this;
    }
    /**
     * @return string
     */
    public function getKeywordtype()
    {
        return $this->keywordtype;
    }
    /**
     * @param string $keywordtype
     *
     * @return self
     */
    public function setKeywordtype($keywordtype = null)
    {
        $this->keywordtype = $keywordtype;
        return $this;
    }
    /**
     * @return string
     */
    public function getKeywordvalue()
    {
        return $this->keywordvalue;
    }
    /**
     * @param string $keywordvalue
     *
     * @return self
     */
    public function setKeywordvalue($keywordvalue = null)
    {
        $this->keywordvalue = $keywordvalue;
        return $this;
    }
    /**
     * @return string
     */
    public function getHttpusername()
    {
        return $this->httpusername;
    }
    /**
     * @param string $httpusername
     *
     * @return self
     */
    public function setHttpusername($httpusername = null)
    {
        $this->httpusername = $httpusername;
        return $this;
    }
    /**
     * @return string
     */
    public function getHttppassword()
    {
        return $this->httppassword;
    }
    /**
     * @param string $httppassword
     *
     * @return self
     */
    public function setHttppassword($httppassword = null)
    {
        $this->httppassword = $httppassword;
        return $this;
    }
    /**
     * @return string
     */
    public function getPort()
    {
        return $this->port;
    }
    /**
     * @param string $port
     *
     * @return self
     */
    public function setPort($port = null)
    {
        $this->port = $port;
        return $this;
    }
    /**
     * @return string
     */
    public function getInterval()
    {
        return $this->interval;
    }
    /**
     * @param string $interval
     *
     * @return self
     */
    public function setInterval($interval = null)
    {
        $this->interval = $interval;
        return $this;
    }
    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * @param string $status
     *
     * @return self
     */
    public function setStatus($status = null)
    {
        $this->status = $status;
        return $this;
    }
    /**
     * @return string
     */
    public function getAlltimeuptimeratio()
    {
        return $this->alltimeuptimeratio;
    }
    /**
     * @param string $alltimeuptimeratio
     *
     * @return self
     */
    public function setAlltimeuptimeratio($alltimeuptimeratio = null)
    {
        $this->alltimeuptimeratio = $alltimeuptimeratio;
        return $this;
    }
    /**
     * @return string
     */
    public function getCustomuptimeratio()
    {
        return $this->customuptimeratio;
    }
    /**
     * @param string $customuptimeratio
     *
     * @return self
     */
    public function setCustomuptimeratio($customuptimeratio = null)
    {
        $this->customuptimeratio = $customuptimeratio;
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
    /**
     * @return Log[]
     */
    public function getLog()
    {
        return $this->log;
    }
    /**
     * @param Log[] $log
     *
     * @return self
     */
    public function setLog(array $log = null)
    {
        $this->log = $log;
        return $this;
    }
    /**
     * @return ResponseTime[]
     */
    public function getResponsetime()
    {
        return $this->responsetime;
    }
    /**
     * @param ResponseTime[] $responsetime
     *
     * @return self
     */
    public function setResponsetime(array $responsetime = null)
    {
        $this->responsetime = $responsetime;
        return $this;
    }
}