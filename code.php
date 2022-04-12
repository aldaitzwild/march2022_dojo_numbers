<?php

function transform($start, $end) {

    if($start < 0 || $end < 0) return 'Les paramètres doivent etre positifs';
    if($end < $start) return 'La fin doit est supérieur au début';
    if($end > 9) return 'La fin ne peut pas dépasser 9';

    /* Solution 1
    $result = "";

    for($i = $start; $i < $end; $i++) {
        $result .= $i . '-';
    }

    $result .= $end;

    return $result;
    */

    $numbers = range($start, $end);
    return implode('-', $numbers);
}