<?php

require "db_config.php";
include "Header.php";

//==================================================== TRY CATCH ========================================
try {

    $mysqli = new mysqli($servername, $username, $password, $dbname);

    if($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
      }

    $sql = "SELECT * FROM mailingList";	
    $result = $mysqli -> query($sql);
    $rowCount = $result->num_rows;
    // fetch all
    // free results set
    // $result -> free_result();
    // $mysqli -> close();
    if($rowCount == 0)
    echo "*** There are no rows to display from the Employee table ***";
    else
    { 
    $outputInArrayFormat = $result -> fetch_all(MYSQLI_ASSOC);
echo '<div class="col" style="background: white">';
?>

<div class="col">
    <div class="row" style="background-color:white; height: 250px; height:fit-content; margin: 5px;">
        <h3>Mailing List</h3>
        <div class="col">
        <h5>Full Name</h5>
            <?php foreach ($outputInArrayFormat as $employee ):?>
            <h6><?php echo $employee['firstName'].' '.$employee['lastName'].'<br>';?></h6>
            <?php endforeach; ?>
        </div>
        <div class="col">
        <h5>Email</h5>
            <?php foreach ($outputInArrayFormat as $employee ):?>
            <h6><?php echo $employee['emailAddress'].'<br>';?></h6>
            <?php endforeach; ?>
        </div>
        <div class="col">
            <h5>Phone</h4>
            <?php foreach ($outputInArrayFormat as $employee ):?>
            <h6><?php echo $employee['phoneNumber'].'<br>';?></h6>
            <?php endforeach; ?>
        </div>
        <!-- <div class="col">
        <h5>User Name</h5>
            <?php foreach ($outputInArrayFormat as $employee ):?>
            <h6><?php echo $employee['username'].'<br>';?></h6>
            <?php endforeach; ?>
        </div>
        <div class="col">
        <h5>Referal Type</h5>
            <?php foreach ($outputInArrayFormat as $employee ):?>
            <h6><?php echo $employee['referrer'].'<br>';?></h6>
            <?php endforeach; ?>
        </div> -->
    </div>
</div>
            
 <?php
    }   
 }
 catch (PDOException $e) {
     echo "Connection failed: " . $e->getMessage();
 }
include "Footer.php";

?>