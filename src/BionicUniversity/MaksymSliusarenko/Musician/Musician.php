<?php

namespace BionicUniversity\MaksymSliusarenko\Musician;
include_once 'AbstractMusician.php';

class Musician extends AbstractMusician{

    /**
     * @var string
     */
    protected $keyboards = array();

    //public $categoryMusician;

    /**
     * @param $levelMusician
     * @param $k
     */
    public function __construct(Keyboards $k,$levelMusician,$nameMusician)
    {
        if ($levelMusician ==1 && $k->keyboard == 'Drums'){
            echo "Drums", PHP_EOL;}
        elseif ($levelMusician ==2 && $k->keyboard == 'Guitar'){
            echo "Guitar", PHP_EOL;}
        elseif ($levelMusician ==3 && $k->keyboard == 'SynthAxe'){
            echo "SynthAxe", PHP_EOL;}
        elseif ($levelMusician ==4 && $k->keyboard == 'Piano'){
            echo "Piano", PHP_EOL;}
        elseif ($levelMusician ==5 && $k->keyboard == 'Arfa'){
            echo "Arfa", PHP_EOL;}
        else {
            die('Lol');
        }
        $this->nameMusician = $nameMusician;
        $this->levelMusician = $levelMusician;
        $this->addKeyboards($k);

        //$this->categoryMusician = $categoryMusician;
    }


    public function addKeyboards(Keyboards $k){
        array_push($this->keyboards,$k);
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
