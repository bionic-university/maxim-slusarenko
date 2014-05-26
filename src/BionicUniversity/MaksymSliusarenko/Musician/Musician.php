<?php

namespace BionicUniversity\MaksymSliusarenko\Musician;
include_once 'AbstractMusician.php';

/**
 * Class Musician
 * @package BionicUniversity\MaksymSliusarenko\Musician
 */
class Musician extends AbstractMusician
    {

    /**
     * @var string
     */
    protected $keyboards = array();

    //public $categoryMusician;

    /**
     * @param Keyboards $keyboard
     * @param $levelMusician
     * @param $nameMusician
     */
    public function __construct(Keyboards $keyboard,$levelMusician,$nameMusician)
    {
        if ($levelMusician ==1 && $keyboard->keyboard == 'Drums'){
            echo "Drums", PHP_EOL;
        }
        elseif ($levelMusician ==2 && $keyboard->keyboard == 'Guitar'){
            echo "Guitar", PHP_EOL;
        }
        elseif ($levelMusician ==3 && $keyboard->keyboard == 'SynthAxe'){
            echo "SynthAxe", PHP_EOL;
        }
        elseif ($levelMusician ==4 && $keyboard->keyboard == 'Piano'){
            echo "Piano", PHP_EOL;
        }
        elseif ($levelMusician ==5 && $keyboard->keyboard == 'Arfa'){
            echo "Arfa", PHP_EOL;
        }
        $this->nameMusician = $nameMusician;
        $this->levelMusician = $levelMusician;
        $this->addKeyboards($keyboard);

        //$this->categoryMusician = $categoryMusician;
    }


    /**
     * @param Keyboards $keyboard
     * @return $this
     */
    public function addKeyboards(Keyboards $keyboard)
    {
        array_push($this->keyboards,$keyboard);

        return $this;
    }

    /**
     * @return string
     */
    public function getKeyboards()
    {
        return $this->keyboards;
    }



}
