<?php

function get_buttons($flag, $id)
{
    $vew = '<a href="read.php?id='.$id.'" title="View Task"><button class="btn btn-default btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a> ';
    $edit = '<a href="update.php?id='.$id.'" title="Edit Task"><button class="btn btn-success btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a> ';
    $delete = '<a href="delete.php?id='.$id.'" title="Delete Task"><button class="btn btn-danger btn-sm"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button></a> ';

    if ($flag == '<span class="text-danger"><strong>TODAY</strong></span>' || $flag == 'COMPLETED') {
        return $vew;
    }
    elseif ($flag == '<span class="text-warning"><strong>COMING UP</strong></span>') {
        return $vew . $edit;
    }
    else {
        return $vew . $edit . $delete;
    }
}
