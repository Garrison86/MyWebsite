<?php

// variables
$variableOne = "One";
$variable1 = 1;

// string concatenation
echo "This is number one spelt out: " . $variableOne;

// create some blank spaces
echo "<br /><br />";

// number manipulation
echo "Basic math operations: " . ($variable1 + 39) / 40 * 2 - 1 + 10;

// create some blank spaces
echo "<br /><br />";

echo "\$variable1 is " . $variable1 . "<br />";
$variable1 += 2;
echo "After \$variable1 += 2; \$variable1 is now: " . $variable1;

// create some blank spaces
echo "<br /><br />";

echo "currently \$variable1 is a number: " . $variable1 . "<br />";
// change the type
$variable1 = " is now a string!";
echo "\$variable1" . $variable1 . "<br />";

// create some blank spaces
echo "<br /><br />";

// print
print("This is print.<br />");
printf("printf is slightly more complex. it can be used to display a variable: %s<br />", $variable1);

/* 
 * Remember to comment your code 
 * */

?>