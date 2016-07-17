<?php

namespace Montross50\UptimeRobotApi\SDK\Model;

class AccountDetails
{
    /**
     * @var string
     */
    protected $stat;
    /**
     * @var Account
     */
    protected $account;
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
     * @return Account
     */
    public function getAccount()
    {
        return $this->account;
    }
    /**
     * @param Account $account
     *
     * @return self
     */
    public function setAccount(Account $account = null)
    {
        $this->account = $account;
        return $this;
    }
}