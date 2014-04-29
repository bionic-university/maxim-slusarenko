<?php

class House{
    /**
     * @var string
     */
    public $color;
    /**
     * @var string
     */
    public $type;

    function __construct($color, $type)
    {
        $this->color = $color;
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }



}
