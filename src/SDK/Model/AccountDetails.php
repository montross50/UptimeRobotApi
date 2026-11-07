<?php

namespace Montross50\UptimeRobotApi\SDK\Model;

class AccountDetails
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
     * @var Account
     */
    protected $account;
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
     * @return Account
     */
    public function getAccount(): Account
    {
        return $this->account;
    }
    /**
     * @param Account $account
     *
     * @return self
     */
    public function setAccount(Account $account): self
    {
        $this->initialized['account'] = true;
        $this->account = $account;
        return $this;
    }
}