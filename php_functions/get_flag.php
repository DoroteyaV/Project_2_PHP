<?php

function get_flag($due_date, $type)
{
    $today = (int) date('Ymd');
    $due = (int) preg_replace("(-)", "", $due_date);

    if ($today == $due) {
        $flag = 'TODAY';
        if ($type == 2 || $type == 0 || $type == NULL){
            return $flag;
        }
    } elseif ($today > $due) {
        $flag = 'COMPLETED';
        if ($type == 1 || $type == 0 || $type == NULL){
            return $flag;
        }
    } elseif ($today + 7 >= $due) {
        $flag = 'COMING UP';
        if ($type == 3 || $type == 0 || $type == NULL){
            return $flag;
        }
    } else {
        $flag = 'APPROACHING';
        if ($type == 4 || $type == 0 || $type == NULL){
            return $flag;
        }
    }
    return NULL;
}
