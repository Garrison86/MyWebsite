<?php

include "Header.php";

    if (isset($_POST["empNameTextBox"]))    //=======================Emp Name
        $empName = $_POST["empNameTextBox"];
        else
            $empName = " ";
    if (isset($_POST["IDTextBox"]))         //=======================Emp ID
        $empId = $_POST["IDTextBox"];
        else
            $empId = " ";
    if (isset($_POST["TeleTextBox"]))       //=======================Emp  Telephone
        $empTele = $_POST["TeleTextBox"];
        else
            $empTele = " ";
    if (isset($_POST["EmailTextBox"]))      //=======================Emp  Email
        $empEmail = $_POST["EmailTextBox"];
        else
            $empEmail = " ";
    if (isset($_POST["position"]))          //=======================Emp  Email
        $position = $_POST["position"];
        else
            $position = " ";
    ?>

<div class="row container-fluid">
    <div class="left-side col">
        <br>
        <div class="col">
        <form method="post">
            <input type="text" name="empNameTextBox" placeholder="Employee Name?" style="margin:2px;"/>

            <input type="text" name="IDTextBox" placeholder="Employee ID?" style="margin:2px;"/>

            <input type="text" name="TeleTextBox" placeholder="Telephone Number?" style="margin:2px;" />

            <input type="text" name="EmailTextBox" placeholder="Email Address?" style="margin:2px;"/>
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
    
    <div class="right-side col">

        <?php
echo 'Employee Information<br>';

        echo <<<_END
        <br>
		Employee Name: $empName
        <br>
		Employee ID: $empId
        <br>
		Employee Telephone: $empTele
        <br>
		Emplyoee Email: $empEmail
        <br>
		Emplyoee position: $position
_END;
        ?>
    </div>
</div>


<?php
include "Footer.php";
?>