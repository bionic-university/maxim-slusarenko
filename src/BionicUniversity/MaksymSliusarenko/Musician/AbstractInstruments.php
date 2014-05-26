<?php

namespace BionicUniversity\MaksymSliusarenko\Musician;

/**
 * Class AbstractInstruments
 *
 * @package BionicUniversity\MaksymSliusarenko\Musician
 */
abstract class AbstractInstruments
{

    protected $categoryInstrument = '';
    protected $soundOfInstrument = '';

    /**
     * @return string
     */
    public function getCategoryInstrument()
    {
        return $this->categoryInstrument;
    }

    /**
     * @param string $categoryInstrument
     */
    public function setCategoryInstrument($categoryInstrument)
    {
        $this->categoryInstrument = $categoryInstrument;
    }

    /**
     * @return string
     */
    public function getSoundOfInstrument()
    {
        return $this->soundOfInstrument;
    }

    /**
     * @param string $soundOfInstrument
     */
    public function setSoundOfInstrument($soundOfInstrument)
    {
        $this->soundOfInstrument = $soundOfInstrument;
    }


}
