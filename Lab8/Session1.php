<?php

include "Header.php";

if (isset($_POST["submit"])) //=======================Emp Name
    $_SESSION["empName"] = $_POST["empNameTextBox"];
$_SESSION["empId"] = $_POST["IDTextBox"];
$_SESSION["empTel"] = $_POST["TeleTextBox"];
$_SESSION["empEmail"] = $_POST["EmailTextBox"];
$_SESSION["newPos"] = $_POST["position"];

header("Location: Session2.php");
exit;
?>

<div class="row container-fluid">
    <div class="left-side col">
        <br>
        <div class="col">
            <form method="post" action="Session2.php">
                <input type="text" name="empName" placeholder="Employee Name?" style="margin:2px;" />

                <input type="text" name="empId" placeholder="Employee ID?" style="margin:2px;" />

                <input type="text" name="empTel" placeholder="Telephone Number?" style="margin:2px;" />

                <input type="text" name="empEmail" placeholder="Email Address?" style="margin:2px;" />
        </div>

        <div class="col">
            <input type="radio" name="position" value="Manager" />
            <label for="empNameTextBox">Manager</label>
            <input type="radio" name="position" value="teamLead" />
            <label for="empNameTextBox">Team Lead</label>
            <input type="radio" name="position" value="iTDeveloper" />
            <label for="empNameTextBox">IT Developer</label>
            <input type="radio" name="position" value="iTAnalyst" />
            <label for="empNameTextBox">IT Analyst</label>
        </div>
        <br>
        <input type="submit" value="Submit Information" />
        </form>
    </div>
</div>


<?php
include "Footer.php";
?>