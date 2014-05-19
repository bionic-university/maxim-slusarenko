<?php

interface myzok
{
    public function klava($level);
    public function stryna($level);	   //інтерфейси і абстрактні класи я сам неособо знаю 
    public function smuk($level);	  //тобі ж там шото розказували от і зробиш нормально, єслі це некатить
}




class myz implements myzok
{

    protected $maxLevel = 5;   //макс уровень музиканта

    public function __construct($name,$level)	//1 арг = імя інструмента(імя метода), 2 = уровень
    {
        if(method_exists($this,$name))  //еслі введений метод існує			аргументи 1-наш обєкт, 2 - імя метода
        {
            if($level < 1 or $level > $this->maxLevel) echo "Недопустимый уровень музыканта";   //перевірка на норм діапазон значень уровня
            else self::$name($level);   //визов заданого метода
        }
		else echo "Заданого инструмента несуществует";
    }

     public function klava($level)
    {
        if($level <= 3) echo "Клавалалала";
        else echo "У вас слишком низкий уровень для того чтобы играть на клавишних инструмантах";
    }

    public function stryna($level)
    {
        if($level <= 2) echo "Струнунуннуна";
        else echo "У вас слишком низкий уровень для того чтобы играть на струнных инструмантах";
    }

    public function smuk($level)
    {
        if($level == 1) echo "Смик-смик:)";
        else echo "У вас слишком низкий уровень для того чтобы играть на смычковых инструмантах";
    }

}


$w = new myz('stryna',1);	//	запуск:)
//форму вводу сам уже прикрутиш єслі нада