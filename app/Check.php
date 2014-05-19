<?php

require_once __DIR__ . '/../bootstrap.php';
use BionicUniversity\MaksymSliusarenko\Musician as Musician;


$music = new Musician\Musician(new Musician\Keyboards('Drums', 'electron', 'first','booms'),1,'Roman');
var_dump($music);