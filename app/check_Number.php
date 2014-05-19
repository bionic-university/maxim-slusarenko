<?php

check_Number();

function check_Number () {
    $arr = array('region' => 'AS','number' => 1234,'seria' => 'MB');
    // Check the region
    if (is_string($arr['region'])) {
        if (strlen($arr['region']) == 2) {
                echo $arr['region'].' ';
        }   else {
                die ('Please re-enter the region');
            }   }
    else {
            die ('Please enter the string type of data');
        }

    //Check the number
    if (is_int($arr['number'])) {
        if (strlen($arr['number']) == 4) {
            echo $arr['number'], ' ';
        }   else {
            die ('Please re-enter the number');
        }   }
    else {
        die ('Please enter the int type of data');
    }

    //Check the seria
    if (is_string($arr['seria'])) {
        if (strlen($arr['seria']) == 2) {
            echo $arr['seria'];
        }   else {
            die ('Please re-enter the seria');
        }   }
    else {
        die ('Please enter the string type of data');
    }

}