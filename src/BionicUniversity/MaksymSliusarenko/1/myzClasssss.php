<?php

/**
 * Class myz
 */
class myz implements myzok
{

    protected $maxLevel = 5;

    /**
     * @param $name
     * @param $level
     */
    public function __construct($name,$level)
    {
        if(method_exists($this,$name))
        {
            if($level < 1 or $level > $this->maxLevel)
                echo "Недопустимый уровень музыканта";
        }
		else echo "Заданого инструмента несуществует";
    }

    /**
     * @param $level
     * @return string|void
     */
    public function klava($level)
    {
        if($level <= 3) echo "Клавалалала";
        else
            echo "У вас слишком низкий уровень для того чтобы играть на клавишних инструмантах";
    }

    /**
     * @param $level
     * @return string|void
     */
    public function stryna($level)
    {
        if($level <= 2) echo "Струнунуннуна";
        else
            echo "У вас слишком низкий уровень для того чтобы играть на струнных инструмантах";
    }

    /**
     * @param $level
     * @return string|void
     */
    public function smuk($level)
    {
        if($level == 1) echo "Смик-смик:)";
        else
            echo "У вас слишком низкий уровень для того чтобы играть на смычковых инструмантах";
    }

}
