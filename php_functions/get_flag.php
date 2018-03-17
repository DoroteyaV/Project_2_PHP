<?php

function get_flag($due_date, $type)
{
    $today = (int) date('Ymd');
    $due = (int) preg_replace("(-)", "", $due_date);

    if ($today == $due) {
        $flag = '<span class="text-danger"><strong>TODAY</strong></span>';
        if ($type == 2 || $type == 0 || $type == NULL){
            return $flag;
        }
    } elseif ($today > $due) {
        $flag = 'COMPLETED';
        if ($type == 1 || $type == 0 || $type == NULL){
            return $flag;
        }
    } elseif ($today + 7 >= $due) {
        $flag = '<span class="text-warning"><strong>COMING UP</strong></span>';
        if ($type == 3 || $type == 0 || $type == NULL){
            return $flag;
        }
    } else {
        $flag = '<span class="text-info"><strong>APPROACHING</strong></span>';
        if ($type == 4 || $type == 0 || $type == NULL){
            return $flag;
        }
    }
    return NULL;
}
