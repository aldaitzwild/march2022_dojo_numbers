<?php

function transform($start, $end) {
    //Contrôles
    if($start < 0 || $end < 0)
        return 'Les paramètres doivent etre positifs';

    if($start > $end)
        return 'La fin doit est supérieur au début';

    if($end > 9) 
        return 'La fin ne peut pas dépasser 9';

    //Process Normal

    //Solution 1
    $result = $start;

    for($i = $start + 1; $i <= $end; $i++) 
    {
        $result .= '-' . $i;
    }

    return $result;


    //Solution 2
    // $result = [];

    // for($i = $start; $i <= $end; $i++) 
    // {
    //     $result[] = $i;
    // }

    // return implode('-', $result);
}