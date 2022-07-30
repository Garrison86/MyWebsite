<?php
session_start(); 
require "MySQLConnectionInfo.php";

$error = "";

if(isset($_POST["empFirstName"]) || isset($_POST["empLastName"]))
{
		
		try {
			// $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
			// $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			//  echo "Connected successfully" . "</br>";	
			$mysqli = new mysqli($host, $username, $password, $database);
			echo "Connected successfully" . "</br>";
				
			$sqlQuery = "INSERT INTO Employee (FirstName, LastName, EmailAddress, PhoneNumber, SocialInsuranceNumber, PASSWORD) VALUES('"
			.$_POST["empFirstName"]."', '"
			.$_POST["empLastName"]."','"
			.$_POST["empEmail"]."','"
			.$_POST["empTele"]."','"
			.$_POST["empSIN"]."','"
			.$_POST["empPass"]."')";
			
			try {
				$result = $pdo->query( $sqlQuery );
				echo "Employee Successfully Added". "<br>";
			}
			catch(PDOException $e) {
				  echo "Employee Could not be added:  " . $e->getMessage();
			}		
			$pdo = null;
			}	
		catch(PDOException $e) {
				  echo "Connection failed:  " . $e->getMessage();
		}			
}
include "Header.php";
include "MySQLMenu.php";
include "Footer.php";
?>