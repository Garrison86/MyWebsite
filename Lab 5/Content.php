<?php
    $first_name = "Michael";
    $last_name = "Garrison";
    $greeting_one = "Hello World!!";
    $greeting_two = "This is the first time I'm using PHP!!";
               
    echo "Name: ". $first_name . " " . $last_name;
    echo "<br> ";
    echo $greeting_one . " " . $greeting_two;
    echo "<br> ";
            echo "Today is " . date('l \t\h\e jS') ."<br>";
            echo "Today is " . date('Y - m - d') ."<br>";
            echo "Tomorrow's date is " . date('Y - m - d', strtotime('tomorrow'));
