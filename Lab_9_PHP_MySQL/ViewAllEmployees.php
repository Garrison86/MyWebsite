<?php
session_start();

require "MySQLConnectionInfo.php";

try {
    // $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    $mysqli = new mysqli('127.0.0.1', 'root', '', 'test');
    echo "Connected successfully" . "</br>";

    $sqlQuery = "SELECT * FROM employees";	// CONNECTION
    $result = $mysqli->query($sqlQuery); 
    $outputInArrayFormat = $result->fetch_all(MYSQLI_ASSOC);
    print_r($outputInArrayFormat);
    foreach ($outputInArrayFormat as $employee ){
		echo $employee['firstName'];		
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
    <?php foreach ($outputInArrayFormat as $employee ):?>
    <div class="row" style="background-color:white; height: 250px; margin: 5px;">
    <h3>Database Data</h3>
    <h2><?php echo $employee['empFirstName'];?></h2>
    </div>
        <?php endforeach; ?>
</div>
<?php
include "Footer.php";
?>