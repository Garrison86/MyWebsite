<?php
session_start();

require "MySQLConnectionInfo.php";

try {
    // $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $mysqli = new mysqli($host, $username, $password, $database);
    // $mysqli = new mysqli($host, $username, $password, $database);
    echo "Connected successfully" . "</br>";

    $sqlQuery = "SELECT * FROM employee";	// CONNECTION
    $result = $mysqli->query($sqlQuery); 
    $outputInArrayFormat = $result->fetch_all(MYSQLI_ASSOC);
    //print_r($outputInArrayFormat);
    foreach ($outputInArrayFormat as $employee ){
		echo $employee['FirstName'];		
    }
    }
    catch (PDOException $e) {
    
        echo "Connection failed: " . $e->getMessage();
    }
  
include "Header.php";
?>
<div class="col">
    <div class="row" style="background-color:white; height: 250px; margin: 5px;">
    <h3>Session State Data</h3>

    </div>
    <div class="row" style="background-color:white; height: 250px; height:fit-content; margin: 5px;">
        <h3>Database Data</h3>
        <div class="col">
        <h4>First Name</h4>
            <?php foreach ($outputInArrayFormat as $employee ):?>
            <h4><?php echo $employee['FirstName'].'<br>';?></h4>
            <?php endforeach; ?>
        </div>
        <div class="col">
        <h4>Last Name</h4>
            <?php foreach ($outputInArrayFormat as $employee ):?>
            <h4><?php echo $employee['LastName'].'<br>';?></h4>
            <?php endforeach; ?>
        </div>
        <div class="col">
            <h4>Email Address</h4>
            <?php foreach ($outputInArrayFormat as $employee ):?>
            <h4><?php echo $employee['EmailAddress'].'<br>';?></h4>
            <?php endforeach; ?>
        </div>
        <div class="col">
        <h4>Phone Number</h4>
            <?php foreach ($outputInArrayFormat as $employee ):?>
            <h4><?php echo $employee['FirstName'].' '.$employee['LastName'].''.'<br>';?></h4>
            <?php endforeach; ?>
        </div>
        <div class="col">
        <h4>SIN</h4>
            <?php foreach ($outputInArrayFormat as $employee ):?>
            <h4><?php echo $employee['FirstName'].' '.$employee['LastName'].''.'<br>';?></h4>
            <?php endforeach; ?>
        </div>
        <div class="col">
        <h4>Password</h4>
            <?php foreach ($outputInArrayFormat as $employee ):?>
            <h4><?php echo $employee['PASSWORD'].'<br>';?></h4>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php include "Footer.php"; ?>