<?php
session_start();

require "MySQLConnectionInfo.php";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "Connected successfully" . "</br>";

    $sqlQuery = "SELECT * FROM 'Employee'";		
				
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

    <div class="row" style="background-color:white; height: 250px; margin: 5px;">
    <h3>Database Data</h3>

    </div>
</div>
<?php
include "Footer.php";
?>