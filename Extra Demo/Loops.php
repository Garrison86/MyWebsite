<?php

	$i = 0;
	
	// FOR LOOPS
	
	// counting up
	for($i; $i < 10; ++$i)
	{
		echo "Counting up: $i<br />";
	}
	
	echo "<br /><br />";
	
	// counting down
	for($i; $i > 0; --$i)
	{
		echo "Counting down: $i<br />";
	}
	
	echo "<br /><br />";
	
	// WHILE LOOPS
	
	/*
	 * Remember that it is possible that the while loop never runs if the conditional statement is met
	 */
	
	$i = 0;

	while($i != 10)
	{
		if($i != 10)
			echo "\$i does not equal 10 <br />";
		else
			echo "\$i does is equal 10 <br />";	
		
		++$i;
	}
	
	echo "<br /><br />";
	
	// DO - WHILE
	
	/*
	 * the do - while statement will always run at least one time
	 */
	
	do
	{
		echo "\$i is $i and is greater than 0<br />";		
		--$i;
	}
	while($i != 0);
	
	echo "<br /><br />";
	
	// BREAK and CONTINUE
	
	/*
	* continue forces the current iteration of the loop to stop working and proceed to the next one
	* 
	* break forces the entire loop to stop working
	*/
	
	for($i; $i < 100; $i++)
	{
		if($i % 2 == 0)
			continue; // skip every second one
		
		if($i == 37)
			break;
		
		echo "The value of \$i is: $i<br />";
	}
	
?>