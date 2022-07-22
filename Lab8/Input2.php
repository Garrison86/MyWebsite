<?php

include "Header.php";

    if (isset($_POST["empNameTextBox"])) //=======================Emp Name
        $empName = $_POST["empNameTextBox"];
        else
            $empName = " ";
    if (isset($_POST["IDTextBox"])) //=======================Emp ID
        $empId = $_POST["IDTextBox"];
        else
            $empId = " ";
    if (isset($_POST["TeleTextBox"])) //=======================Emp  Telephone
        $empTele = $_POST["TeleTextBox"];
        else
            $empTele = " ";
    if (isset($_POST["EmailTextBox"])) //=======================Emp  Email
        $empEmail = $_POST["EmailTextBox"];
        else
            $empEmail = " ";
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
                <input type="radio" name="manager" value="Manager" />
                <label for="empNameTextBox, IDTextBox, TeleTextBox, EmailTextBox">Manager</label>
                <input type="radio" name="teamLead" value="teamLead" />
                <label for="empNameTextBox, IDTextBox, TeleTextBox, EmailTextBox">Team Lead</label>
                <input type="radio" name="iTDeveloper" value="iTDeveloper" />
                <label for="empNameTextBox, IDTextBox, TeleTextBox, EmailTextBox">IT Developer</label>
                <input type="radio" name="iTAnalyst" value="iTAnalyst" />
                <label for="empNameTextBox, IDTextBox, TeleTextBox, EmailTextBox">IT Analyst</label>
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
_END;
        ?>
    </div>
</div>


<?php
include "Footer.php";
?>