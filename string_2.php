<?php
$string = "Hello World";
$fruits= ["apple", "banana", "orange"];

// echo $fruits[1];

// echo $string[7];

// echo substr($string,0,5);

// echo substr($string,2);

//find last 5 characters
/*$lenght = strlen($string);
$startingPosition = $lenght - 5;
echo substr($string, $startingPosition);
*/

//smart way
// echo substr($string,-5);

// echo strlen($string);

$lenght = strlen($string);
for($i=0;$i< $lenght; $i++){
    echo $string[$i];
}



