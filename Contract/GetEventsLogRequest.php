<?php

namespace Biplane\YandexDirectBundle\Contract;

/**
 * @codeCoverageIgnore
 * @SuppressWarnings(PHPMD)
 */
class GetEventsLogRequest
{
    /**
     * @var string
     */
    protected $TimestampFrom;
    /**
     * @var string
     */
    protected $TimestampTo;
    /**
     * @var string
     */
    protected $LastEventOnly;
    /**
     * @var string
     */
    protected $WithTextDescription;
    /**
     * @var string[]
     */
    protected $Logins;
    /**
     * @var GetEventsLogFilter
     */
    protected $Filter;

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
     * Gets the TimestampFrom.
     *
     * @return string
     */
    public function getTimestampFrom()
    {
        return $this->TimestampFrom;
    }

    /**
     * Sets the TimestampFrom.
     *
     * @param string $TimestampFrom
     *
     * @return GetEventsLogRequest
     */
    public function setTimestampFrom($TimestampFrom)
    {
        $this->TimestampFrom = $TimestampFrom;

        return $this;
    }

    /**
     * Gets the TimestampTo.
     *
     * @return string
     */
    public function getTimestampTo()
    {
        return $this->TimestampTo;
    }

    /**
     * Sets the TimestampTo.
     *
     * @param string $TimestampTo
     *
     * @return GetEventsLogRequest
     */
    public function setTimestampTo($TimestampTo)
    {
        $this->TimestampTo = $TimestampTo;

        return $this;
    }

    /**
     * Gets the LastEventOnly.
     *
     * @return string
     */
    public function getLastEventOnly()
    {
        return $this->LastEventOnly;
    }

    /**
     * Sets the LastEventOnly.
     *
     * @param string $LastEventOnly
     *
     * @return GetEventsLogRequest
     */
    public function setLastEventOnly($LastEventOnly)
    {
        $this->LastEventOnly = $LastEventOnly;

        return $this;
    }

    /**
     * Gets the WithTextDescription.
     *
     * @return string
     */
    public function getWithTextDescription()
    {
        return $this->WithTextDescription;
    }

    /**
     * Sets the WithTextDescription.
     *
     * @param string $WithTextDescription
     *
     * @return GetEventsLogRequest
     */
    public function setWithTextDescription($WithTextDescription)
    {
        $this->WithTextDescription = $WithTextDescription;

        return $this;
    }

    /**
     * Gets the Logins.
     *
     * @return string[]
     */
    public function getLogins()
    {
        return $this->Logins;
    }

    /**
     * Sets the Logins.
     *
     * @param string[] $Logins
     *
     * @return GetEventsLogRequest
     */
    public function setLogins(array $Logins)
    {
        $this->Logins = $Logins;

        return $this;
    }

    /**
     * Gets the Filter.
     *
     * @return GetEventsLogFilter
     */
    public function getFilter()
    {
        return $this->Filter;
    }

    /**
     * Sets the Filter.
     *
     * @param GetEventsLogFilter $Filter
     *
     * @return GetEventsLogRequest
     */
    public function setFilter(GetEventsLogFilter $Filter)
    {
        $this->Filter = $Filter;

        return $this;
    }
}