<?php

/* 
 * Here is an introduction to conditional statements in the PHP programming language
 * 
 * Justin Antoszek, 2011
 */

$number1 = 1;
$numberOne = "one";

// NOTE watch for the various comparison operators

// IF statement
if($number1 == 1)
	echo "\$number1 is equal to 1 <br /><br />";

if($number1 == 2)
	echo "This statment will never be hit as \$number1 does not equal 2 <br /><br />";

if($number1 != $numberOne)
	echo "Obviously \$number1 does not equal \$numberOne <br /><br />";

if($number1 == 0)
	echo "\$numberOne is equal to 0.<br /><br />";
else
	echo "\$numberOne does not equal 0.<br /><br />";

if($number1 == 10 || $number1 == 1)
	echo "\$numberOne is equal to 10 OR \$numberOne is equal to 1<br /><br />";

if($number1 == 10 && $number1 == 1)
	echo "Obviously, \$numberOne can not be equal to both 10 and 1<br /><br />";

if($number1 == 9)
	echo "\$numberOne is equal to 9.<br /><br />";
else if ($number1 == 8)
	echo "\$numberOne is equal 8.<br /><br />";
else if ($number1 == 7)
	echo "\$numberOne  is equal to 7.<br /><br />";
else
	echo "\$numberOne is not equal to 9, 8 or 7.<br /><br />";


// SWITCH

switch($number1)
{
	case 1:
		echo "\$numberOne is equal to 1.<br /><br />";
		break;
		
	case 2:
		echo "\$numberOne is equal to 2.<br /><br />";
		break;
		
	case 3:	
		echo "\$numberOne is equal to 3.<br /><br />";
		break;
		
	default:
		echo "\$numberOne does not match any of the case values.<br /><br />";
		break;
}

?>