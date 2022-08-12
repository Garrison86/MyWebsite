<?php

require "db_config.php";
include "Header.php";

//==================================================== TRY CATCH ========================================
try {
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // $mysqli = new mysqli($servername, $username, $password, $dbname);
    echo "Connected successfully" . "</br>";
    
    $sqlQuery = "SELECT * FROM 'mailingList'";	
    $result = $mysqli->query($sqlQuery); 
    $outputInArrayFormat = $result->fetch_all(MYSQLI_ASSOC);
}
catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
//======================================================================================================== 
echo '<div class="col" style="background: white">';
?>

<div class="col">
    <div class="row" style="background-color:white; height: 250px; height:fit-content; margin: 5px;">
        <h3>Database Data</h3>
        <div class="col">
        <h5>First Name</h5>
            <?php foreach ($outputInArrayFormat as $employee ):?>
            <h6><?php echo $employee['fName'].'<br>';?></h6>
            <?php endforeach; ?>
        </div>
        <div class="col">
        <h5>Last Name</h5>
            <?php foreach ($outputInArrayFormat as $employee ):?>
            <h6><?php echo $employee['lName'].'<br>';?></h6>
            <?php endforeach; ?>
        </div>
        <div class="col">
            <h5>Phone</h4>
            <?php foreach ($outputInArrayFormat as $employee ):?>
            <h6><?php echo $employee['tele'].'<br>';?></h6>
            <?php endforeach; ?>
        </div>
        <div class="col">
        <h5>Email</h5>
            <?php foreach ($outputInArrayFormat as $employee ):?>
            <h6><?php echo $employee['email'].'<br>';?></h6>
            <?php endforeach; ?>
        </div>
        <div class="col">
        <h5>User Name</h5>
            <?php foreach ($outputInArrayFormat as $employee ):?>
            <h6><?php echo $employee['userName'].'<br>';?></h6>
            <?php endforeach; ?>
        </div>
        <div class="col">
        <h5>Referal Type</h5>
            <?php foreach ($outputInArrayFormat as $employee ):?>
            <h6><?php echo $employee['refer'].'<br>';?></h6>
            <?php endforeach; ?>
        </div>
    </div>
</div>
 <?php   
include "Footer.php";

// EXTRA CODE NOT USED

?>