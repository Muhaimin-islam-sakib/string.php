<?php
// $string = "PHP & Laravel Course From Ostad";

// $part = explode(" ",$string);
// print_r($part);
// echo count($part);

$string= [
    
        0 => "PHP",
        1 => "&" ,
        2 => "Laravel",
        3 => "Course",
        4 => "From",
        5 => "Ostad",
    
];
$newString = implode(" ",$string);
// $newString =join(" ",$string);
echo $newString;

