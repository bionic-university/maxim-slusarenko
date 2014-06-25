<?php

namespace BionicUniversity\HRBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Schedule
 */
class Schedule
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $times;

    /**
     * @var \DateTime
     */
    private $day;

    /**
     * @var string
     */
    private $Subject;

    /**
     * @var string
     */
    private $Groups;

    /**
     * @var string
     */
    private $Type;

    /**
     * @var \BionicUniversity\HRBundle\Entity\Profile
     */
    private $profile;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set times
     *
     * @param \DateTime $times
     * @return Schedule
     */
    public function setTimes($times)
    {
        $this->times = $times;

        return $this;
    }

    /**
     * Get times
     *
     * @return \DateTime 
     */
    public function getTimes()
    {
        return $this->times;
    }

    /**
     * Set day
     *
     * @param \DateTime $day
     * @return Schedule
     */
    public function setDay($day)
    {
        $this->day = $day;

        return $this;
    }

    /**
     * Get day
     *
     * @return \DateTime 
     */
    public function getDay()
    {
        return $this->day;
    }

    /**
     * Set Subject
     *
     * @param string $subject
     * @return Schedule
     */
    public function setSubject($subject)
    {
        $this->Subject = $subject;

        return $this;
    }

    /**
     * Get Subject
     *
     * @return string 
     */
    public function getSubject()
    {
        return $this->Subject;
    }

    /**
     * Set Groups
     *
     * @param string $groups
     * @return Schedule
     */
    public function setGroups($groups)
    {
        $this->Groups = $groups;

        return $this;
    }

    /**
     * Get Groups
     *
     * @return string 
     */
    public function getGroups()
    {
        return $this->Groups;
    }

    /**
     * Set Type
     *
     * @param string $type
     * @return Schedule
     */
    public function setType($type)
    {
        $this->Type = $type;

        return $this;
    }

    /**
     * Get Type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * Set profile
     *
     * @param \BionicUniversity\HRBundle\Entity\Profile $profile
     * @return Schedule
     */
    public function setProfile(\BionicUniversity\HRBundle\Entity\Profile $profile = null)
    {
        $this->profile = $profile;

        return $this;
    }

    /**
     * Get profile
     *
     * @return \BionicUniversity\HRBundle\Entity\Profile 
     */
    public function getProfile()
    {
        return $this->profile;
    }
}
