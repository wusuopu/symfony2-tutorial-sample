<?php

namespace Blogger\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Session
 *
 * @ORM\Table(name="session")
 * @ORM\Entity
 */
class Session
{
    /**
     * @var string
     *
     * @ORM\Column(name="session_id", type="string", length=255)
     * @ORM\Id
     */
    private $sessionId;

    /**
     * @var string
     *
     * @ORM\Column(name="session_value", type="text")
     */
    private $sessionValue;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="session_time", type="datetime")
     */
    private $sessionTime;

    /**
     * Set sessionId
     *
     * @param string $sessionId
     *
     * @return Session
     */
    public function setSessionId($sessionId)
    {
        $this->sessionId = $sessionId;

        return $this;
    }

    /**
     * Get sessionId
     *
     * @return string 
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }

    /**
     * Set sessionValue
     *
     * @param string $sessionValue
     *
     * @return Session
     */
    public function setSessionValue($sessionValue)
    {
        $this->sessionValue = $sessionValue;

        return $this;
    }

    /**
     * Get sessionValue
     *
     * @return string 
     */
    public function getSessionValue()
    {
        return $this->sessionValue;
    }

    /**
     * Set sessionTime
     *
     * @param \DateTime $sessionTime
     *
     * @return Session
     */
    public function setSessionTime($sessionTime)
    {
        $this->sessionTime = $sessionTime;

        return $this;
    }

    /**
     * Get sessionTime
     *
     * @return \DateTime 
     */
    public function getSessionTime()
    {
        return $this->sessionTime;
    }
}
