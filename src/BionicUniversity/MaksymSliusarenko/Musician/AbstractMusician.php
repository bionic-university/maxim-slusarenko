<?php

namespace BionicUniversity\MaksymSliusarenko\Musician;
/**
 * Class AbstractMusician
 * @package BionicUniversity\MaksymSliusarenko\Musician
 */
abstract class AbstractMusician
    {

    protected $nameMusician = 'Vasya';
    /**
     * @var int
     */
    public $levelMusician = 1;

    /**
     * @return string
     */
    public function getNameMusician()
    {
        return $this->nameMusician;
    }

    /**
     * @param string $nameMusician
     */
    public function setNameMusician($nameMusician)
    {
        $this->nameMusician = $nameMusician;
    }

    /**
     * @return int
     */
    public function getLevelMusician()
    {
        return $this->levelMusician;
    }

    /**
     * @param int $levelMusician
     */
    public function setLevelMusician($levelMusician)
    {
        $this->levelMusician = $levelMusician;
    }



}