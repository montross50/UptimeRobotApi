<?php

namespace Montross50\UptimeRobotApi\SDK\Model;

class GetAlertContactsResponse
{
    /**
     * @var string
     */
    protected $stat;
    /**
     * @var string
     */
    protected $offset;
    /**
     * @var string
     */
    protected $limit;
    /**
     * @var string
     */
    protected $total;
    /**
     * @var AlertContact[]
     */
    protected $alertcontacts;
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
     * @return string
     */
    public function getOffset()
    {
        return $this->offset;
    }
    /**
     * @param string $offset
     *
     * @return self
     */
    public function setOffset($offset = null)
    {
        $this->offset = $offset;
        return $this;
    }
    /**
     * @return string
     */
    public function getLimit()
    {
        return $this->limit;
    }
    /**
     * @param string $limit
     *
     * @return self
     */
    public function setLimit($limit = null)
    {
        $this->limit = $limit;
        return $this;
    }
    /**
     * @return string
     */
    public function getTotal()
    {
        return $this->total;
    }
    /**
     * @param string $total
     *
     * @return self
     */
    public function setTotal($total = null)
    {
        $this->total = $total;
        return $this;
    }
    /**
     * @return AlertContact[]
     */
    public function getAlertcontacts()
    {
        return $this->alertcontacts;
    }
    /**
     * @param AlertContact[] $alertcontacts
     *
     * @return self
     */
    public function setAlertcontacts(array $alertcontacts = null)
    {
        $this->alertcontacts = $alertcontacts;
        return $this;
    }
}