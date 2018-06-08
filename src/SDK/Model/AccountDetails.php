<?php

namespace Montross50\UptimeRobotApi\SDK\Model;

class AccountDetails
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
     * @var Account
     */
    protected $account;
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
     * @return Account
     */
    public function getAccount() : ?Account
    {
        return $this->account;
    }
    /**
     *
     *
     * @param Account $account
     *
     * @return self
     */
    public function setAccount(?Account $account) : self
    {
        $this->account = $account;
        return $this;
    }
}
