<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class ShortClientInfo
{
    /**
     * @var string
     */
    protected $Login;
    /**
     * @var string
     */
    protected $FIO;
    /**
     * @var string
     */
    protected $Role;

    /**
     * Creates a new instance.
     *
     * @return self
     */
    public static function create()
    {
        return new self();
    }

    /**
     * Gets the Login.
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->Login;
    }

    /**
     * Sets the Login.
     *
     * @param string $Login
     *
     * @return ShortClientInfo
     */
    public function setLogin($Login)
    {
        $this->Login = $Login;

        return $this;
    }

    /**
     * Gets the FIO.
     *
     * @return string
     */
    public function getFIO()
    {
        return $this->FIO;
    }

    /**
     * Sets the FIO.
     *
     * @param string $FIO
     *
     * @return ShortClientInfo
     */
    public function setFIO($FIO)
    {
        $this->FIO = $FIO;

        return $this;
    }

    /**
     * Gets the Role.
     *
     * @return string
     */
    public function getRole()
    {
        return $this->Role;
    }

    /**
     * Sets the Role.
     *
     * @param string $Role
     *
     * @return ShortClientInfo
     */
    public function setRole($Role)
    {
        $this->Role = $Role;

        return $this;
    }
}