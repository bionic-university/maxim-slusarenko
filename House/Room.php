<?php

include_once 'House.php';

class Room{
    /**
     * @var float
     */
    public $height;
    /**
     * @var float
     */
    public $weight;

    function __construct($height, $weight)
    {
        $this->height = $height;
        $this->weight = $weight;
    }

    /**
     * @return float
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     * @return float
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param $weight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }


}