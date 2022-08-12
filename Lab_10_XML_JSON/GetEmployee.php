<?php 
session_start();
require "MySQLConnectionInfo.php";

// BODY HERE    
try {
    // $pdo = new PDO("mysql:host=$host;dbname=$database", $username, $password);
    // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $mysqli = new mysqli($host, $username, $password, $database); // CONNECTION
    echo "Connected successfully" . "</br>";

    $sqlQuery = "SELECT * FROM employee";
    $result = $mysqli->query($sqlQuery);
    $outputInArrayFormat = $result->fetch_all(MYSQLI_ASSOC);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}



$q = intval($_GET['q']);

$con = mysqli_connect($host, $username, $password, $database);
if (!$con) {
  die('Could not connect: '.mysqli_error($con));
}

mysqli_select_db($con,"dbuoykhmo6i7yu");
$sql="SELECT * FROM employee WHERE EmployeeId = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
<th>Hometown</th>
<th>Job</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['FirstName'] . "</td>";
  echo "<td>" . $row['LastName'] . "</td>";
  echo "<td>" . $row['EmailAddress'] . "</td>";
  echo "<td>" . $row['PhoneNumber'] . "</td>";
  echo "<td>" . $row['SocialInsuranceNumber'] . "</td>";
  echo "<td>" . $row['PASSWORD'] . "</td>";
  echo "</tr>";
}
echo "</table>";
mysqli_close($con);
