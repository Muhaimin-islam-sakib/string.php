<?php

/*$condition = 0;
if($condition){
    echo "Done";
}*/


$string = "PHP & LARAVEL COURSE FROM OSTAD";
$needle = "OSTAD";
$position = strpos($string,$needle);
// echo $position;


if($position !== false){
    echo "Found";
}else{
   echo "Not Found";
}


