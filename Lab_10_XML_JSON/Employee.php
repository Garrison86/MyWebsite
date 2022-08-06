<?php
session_start();
require "MySQLConnectionInfo.php";
// <==================== CONNECT ====================>
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

if (isset($_SESSION["empEmail"]))
    foreach ($outputInArrayFormat as $employee) {
        if ($employee['EmailAddress'] == $_SESSION["empEmail"] && $employee['PASSWORD'] == $_SESSION["empPass"]) {
            echo 'success...<br>';
            echo $employee['EmailAddress'] . '<br>';
            echo $employee['PASSWORD'] . '<br>';
        } else {
        }
    }
?>
<script>
    function showUser(str) {
        if (str == "") {
            document.getElementById("txtHint").innerHTML = "";
            return;
        } else {
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            } else {
                // code for IE6, IE5
                xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
            }
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("txtHint").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "GetEmployee.php?q=" + str, true);
            xmlhttp.send();
        }
    }
</script>

<?php include "Header.php";
// BDY HERE   
?>
<!-- <div class="dropdown">
    <button class="dropbtn">Select an Employee</button>
    <div class="dropdown-content">

        <?php foreach ($outputInArrayFormat as $employee) : ?>
            <h6><a href="#"><?php echo $employee['FirstName'] . ' ' . $employee['LastName'] . '<br>'; ?></a></h6>
            <?php endforeach; ?>

    </div>
</div>
<br>
<br> -->


<form>
    <select name="users" onchange="showUser(this.value)">
        <?php $count = 1;
        foreach ($outputInArrayFormat as $employee) : ?>
            <?php echo '<option value="' . $count++ . '">';
            echo $employee['FirstName'] . ' ' . $employee['LastName'] . '<br>'; ?></option>
        <?php endforeach; ?>
    </select>
</form>
<br>
<div id="txtHint"><b>Person info will be listed here...</b></div>
<?php
include "Footer.php";
?>