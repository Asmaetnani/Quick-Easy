<?php
// 27-03-2001 to 2001-03-27 
function date_to_ymd($date){
    $champ_date = $date; 
    $timestamp = strtotime($champ_date);
    $date_inverse = date('Y-m-d', $timestamp);
    return $date_inverse;
}

// 2001-03-27 to 27-03-2001
function date_to_dmy($date){
    $champ_date = $date; 
    $timestamp = strtotime($champ_date);
    $date_inverse = date('d-m-Y', $timestamp);
    return $date_inverse;
}

?>
