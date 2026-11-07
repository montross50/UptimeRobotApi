<?php

namespace Montross50\UptimeRobotApi\SDK\Model;

class Monitor
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
     * @var list<AlertContact>
     */
    protected $alertcontact;
    /**
     * @var list<Log>
     */
    protected $log;
    /**
     * @var list<ResponseTime>
     */
    protected $responsetime;
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
    public function getUrl(): string
    {
        return $this->url;
    }
    /**
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;
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
    public function getSubtype(): string
    {
        return $this->subtype;
    }
    /**
     * @param string $subtype
     *
     * @return self
     */
    public function setSubtype(string $subtype): self
    {
        $this->initialized['subtype'] = true;
        $this->subtype = $subtype;
        return $this;
    }
    /**
     * @return string
     */
    public function getKeywordtype(): string
    {
        return $this->keywordtype;
    }
    /**
     * @param string $keywordtype
     *
     * @return self
     */
    public function setKeywordtype(string $keywordtype): self
    {
        $this->initialized['keywordtype'] = true;
        $this->keywordtype = $keywordtype;
        return $this;
    }
    /**
     * @return string
     */
    public function getKeywordvalue(): string
    {
        return $this->keywordvalue;
    }
    /**
     * @param string $keywordvalue
     *
     * @return self
     */
    public function setKeywordvalue(string $keywordvalue): self
    {
        $this->initialized['keywordvalue'] = true;
        $this->keywordvalue = $keywordvalue;
        return $this;
    }
    /**
     * @return string
     */
    public function getHttpusername(): string
    {
        return $this->httpusername;
    }
    /**
     * @param string $httpusername
     *
     * @return self
     */
    public function setHttpusername(string $httpusername): self
    {
        $this->initialized['httpusername'] = true;
        $this->httpusername = $httpusername;
        return $this;
    }
    /**
     * @return string
     */
    public function getHttppassword(): string
    {
        return $this->httppassword;
    }
    /**
     * @param string $httppassword
     *
     * @return self
     */
    public function setHttppassword(string $httppassword): self
    {
        $this->initialized['httppassword'] = true;
        $this->httppassword = $httppassword;
        return $this;
    }
    /**
     * @return string
     */
    public function getPort(): string
    {
        return $this->port;
    }
    /**
     * @param string $port
     *
     * @return self
     */
    public function setPort(string $port): self
    {
        $this->initialized['port'] = true;
        $this->port = $port;
        return $this;
    }
    /**
     * @return string
     */
    public function getInterval(): string
    {
        return $this->interval;
    }
    /**
     * @param string $interval
     *
     * @return self
     */
    public function setInterval(string $interval): self
    {
        $this->initialized['interval'] = true;
        $this->interval = $interval;
        return $this;
    }
    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }
    /**
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;
        return $this;
    }
    /**
     * @return string
     */
    public function getAlltimeuptimeratio(): string
    {
        return $this->alltimeuptimeratio;
    }
    /**
     * @param string $alltimeuptimeratio
     *
     * @return self
     */
    public function setAlltimeuptimeratio(string $alltimeuptimeratio): self
    {
        $this->initialized['alltimeuptimeratio'] = true;
        $this->alltimeuptimeratio = $alltimeuptimeratio;
        return $this;
    }
    /**
     * @return string
     */
    public function getCustomuptimeratio(): string
    {
        return $this->customuptimeratio;
    }
    /**
     * @param string $customuptimeratio
     *
     * @return self
     */
    public function setCustomuptimeratio(string $customuptimeratio): self
    {
        $this->initialized['customuptimeratio'] = true;
        $this->customuptimeratio = $customuptimeratio;
        return $this;
    }
    /**
     * @return list<AlertContact>
     */
    public function getAlertcontact(): array
    {
        return $this->alertcontact;
    }
    /**
     * @param list<AlertContact> $alertcontact
     *
     * @return self
     */
    public function setAlertcontact(array $alertcontact): self
    {
        $this->initialized['alertcontact'] = true;
        $this->alertcontact = $alertcontact;
        return $this;
    }
    /**
     * @return list<Log>
     */
    public function getLog(): array
    {
        return $this->log;
    }
    /**
     * @param list<Log> $log
     *
     * @return self
     */
    public function setLog(array $log): self
    {
        $this->initialized['log'] = true;
        $this->log = $log;
        return $this;
    }
    /**
     * @return list<ResponseTime>
     */
    public function getResponsetime(): array
    {
        return $this->responsetime;
    }
    /**
     * @param list<ResponseTime> $responsetime
     *
     * @return self
     */
    public function setResponsetime(array $responsetime): self
    {
        $this->initialized['responsetime'] = true;
        $this->responsetime = $responsetime;
        return $this;
    }
}