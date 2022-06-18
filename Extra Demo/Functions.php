<?php

	function DoSomething()
	{
		// perform some action
	}
	
	function AddNumbers($number1, $number2)
	{
		return $number1 + $number2;
	}
	
	function GetSecretCode()
	{
		return "AJ#N9cv3k@*($#";
	}
	
	
	echo "Calling DoSomething(): <br />";	
	DoSomething();	
	echo "Obviously, it does nothing.";
	
	
	
	echo "<br /><br />";
	
	
	
	echo "Calling GetSecretCode(): <br />";
	echo "The result is: " . GetSecretCode();
	
	
	
	echo "<br /><br />";
	
	
	
	echo "Calling AddNumbers() using the numbers 23, 73<br />";
	echo "The result is: " . AddNumbers(23, 73);
	
?>