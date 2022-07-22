<?php
include "Header.php";
if(isset($_POST["firstNameTextBox"]))
    $firstName = $_POST["firstNameTextBox"];
    else
        $firstName = "Was not set by the form";
        
        echo <<<_END
        
<html>
	<body>
		<form method="post">
			<input type="text" name="firstNameTextBox" placeholder="what is your Name?" />
			<input type="submit" />
		</form>
		<br />
		The name you entered: $firstName
        </body>
    </html>
_END;
        
  ?>