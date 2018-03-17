<?php

function get_buttons($flag, $id)
{
    $vew = '<a href="read.php?id='.$id.'" title="View Task"><button class="btn btn-default btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a> ';
    $edit = '<a href="update.php?id='.$id.'" title="Edit Task"><button class="btn btn-success btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a> ';
    $delete = '<a href="delete.php?id='.$id.'" title="Delete Task"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button></a> ';

    if ($flag == 'TODAY' || $flag == 'COMPLETED') {
        return $vew;
    }
    elseif ($flag == 'COMING UP') {
        return $vew . $edit;
    }
    else {
        return $vew . $edit . $delete;
    }
}
