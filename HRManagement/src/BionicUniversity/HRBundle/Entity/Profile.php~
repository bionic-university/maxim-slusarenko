<?php

namespace BionicUniversity\HRBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Profile
 */
class Profile
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $secondName;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $university;

    /**
     * @var string
     */
    private $faculty;

    /**
     * @var string
     */
    private $skype;

    /**
     * @var string
     */
    private $email;

    /**
     * @var integer
     */
    private $mobilePhone;

    /**
     * @var \DateTime
     */
    private $birthday;

    /**
     * @var string
     */
    private $aboutYou;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $schedules;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schedules = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set firstName
     *
     * @param string $firstName
     * @return Profile
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set secondName
     *
     * @param string $secondName
     * @return Profile
     */
    public function setSecondName($secondName)
    {
        $this->secondName = $secondName;

        return $this;
    }

    /**
     * Get secondName
     *
     * @return string 
     */
    public function getSecondName()
    {
        return $this->secondName;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return Profile
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set university
     *
     * @param string $university
     * @return Profile
     */
    public function setUniversity($university)
    {
        $this->university = $university;

        return $this;
    }

    /**
     * Get university
     *
     * @return string 
     */
    public function getUniversity()
    {
        return $this->university;
    }

    /**
     * Set faculty
     *
     * @param string $faculty
     * @return Profile
     */
    public function setFaculty($faculty)
    {
        $this->faculty = $faculty;

        return $this;
    }

    /**
     * Get faculty
     *
     * @return string 
     */
    public function getFaculty()
    {
        return $this->faculty;
    }

    /**
     * Set skype
     *
     * @param string $skype
     * @return Profile
     */
    public function setSkype($skype)
    {
        $this->skype = $skype;

        return $this;
    }

    /**
     * Get skype
     *
     * @return string 
     */
    public function getSkype()
    {
        return $this->skype;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Profile
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set mobilePhone
     *
     * @param integer $mobilePhone
     * @return Profile
     */
    public function setMobilePhone($mobilePhone)
    {
        $this->mobilePhone = $mobilePhone;

        return $this;
    }

    /**
     * Get mobilePhone
     *
     * @return integer 
     */
    public function getMobilePhone()
    {
        return $this->mobilePhone;
    }

    /**
     * Set birthday
     *
     * @param \DateTime $birthday
     * @return Profile
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Get birthday
     *
     * @return \DateTime 
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set aboutYou
     *
     * @param string $aboutYou
     * @return Profile
     */
    public function setAboutYou($aboutYou)
    {
        $this->aboutYou = $aboutYou;

        return $this;
    }

    /**
     * Get aboutYou
     *
     * @return string 
     */
    public function getAboutYou()
    {
        return $this->aboutYou;
    }

    /**
     * Add schedules
     *
     * @param \BionicUniversity\HRBundle\Entity\Schedule $schedules
     * @return Profile
     */
    public function addSchedule(\BionicUniversity\HRBundle\Entity\Schedule $schedules)
    {
        $this->schedules[] = $schedules;

        return $this;
    }

    /**
     * Remove schedules
     *
     * @param \BionicUniversity\HRBundle\Entity\Schedule $schedules
     */
    public function removeSchedule(\BionicUniversity\HRBundle\Entity\Schedule $schedules)
    {
        $this->schedules->removeElement($schedules);
    }

    /**
     * Get schedules
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSchedules()
    {
        return $this->schedules;
    }

    public function __toString()
    {
        return $this->secondName;
    }
    
}
