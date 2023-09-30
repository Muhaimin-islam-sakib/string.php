<?php 
/*
$string = "Hello World";
// $parts = explode(" ",$string); //using delimiter "," give whole line in one string
$parts = str_split($string,2);
print_r($parts);
*/

$dummyText = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa est fugit commodi rerum omnis velit molestiae et ipsum doloremque ad consequatur doloribus totam, perferendis assumenda eligendi laborum sit quo necessitatibus.";
$stringParts = str_split($dummyText,35);
for($i=0;$i<count($stringParts);$i++){
    echo $stringParts[$i]  . "\n";
}
// print_r($stringParts);

// $stringParts = wordwrap($dummyText,20, "\n");
// echo $stringParts;

