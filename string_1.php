<?php
$string = "Hello World";
$anotherSring = "Hello World";

$firstName = "John";
$lastName = "Doe";

// echo "Hello $firstName\n";
// echo "Hello {$firstName}";

$fruit = "apple";
// echo "I have 5 $fruit"."s";
// echo "I have 5 {$fruit}s";

// echo "First Name: $firstName \nLastName: $lastName \nDesignation: Developer";

//heredoc
/*$longText = <<<ABCD
First Name: {$firstName}
Last Name: {$lastName}
Designation: Developer
ABCD;
echo $longText;
*/

//nowdoc
/*$longText = <<<'ABCD'
First Name: {$firstName}
Last Name: {$lastName}
Designation: Developer
ABCD;
echo $longText;
*/

// $fullName = $firstName. " " .$lastName;  //concatenation concatenate/
$fullName = "{$firstName} {$lastName}";
echo $fullName;


