<?php

namespace BionicUniversity\MaksymSliusarenko\Musician;
include_once 'AbstractInstruments.php';

/**
 * Class Keyboards
 *
 * @package BionicUniversity\MaksymSliusarenko\Musician
 */
class Keyboards extends AbstractInstruments
{

    /** типи - Ударно-клавішні,Пневматичні клавішні духові, Пневматичні клавішні язичкові інструменти,
     * Електронні клавішні музичні інструменти (синтезатори, електроорган)
     * види - статичні, динамічні
     * @var string
     */
    public $typeOfKeyboards;
    /**
     * @var string
     */
    public $keyboard;

    /**
     * @param $keyboard
     * @param $typeOfKeyboards
     * @param $categoryInstrument
     * @param $soundOfInstrument
     */
    function __construct($keyboard, $typeOfKeyboards,$categoryInstrument,$soundOfInstrument)
    {
        $this->keyboard = $keyboard;
        $this->typeOfKeyboards = $typeOfKeyboards;
        $this->categoryInstrument = $categoryInstrument;
        $this->soundOfInstrument = $soundOfInstrument;
    }


}

//$key = new Keyboards('Drums', 'electron', 'first','booms');
//var_dump($key);