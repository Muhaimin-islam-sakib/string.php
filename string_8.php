<?php
$string = "PHP & Laravel Course From Ostad";
$shuffed = str_shuffle($string);
// echo $shuffed;

$encodedString = base64_encode($string);
echo $encodedString;

echo "\n";

$newString = "UEhQICYgTGFyYXZlbCBDb3Vyc2UgRnJvbSBPc3RhZA==";
$encoderString = $newString;
echo base64_decode($encoderString);
