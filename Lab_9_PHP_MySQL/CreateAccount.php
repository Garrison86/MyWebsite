<?php
include "Header.php";

if (isset($_POST["submit"]))
{ 
    $_SESSION["empName"] = $_POST["empNameTextBox"];
    $_SESSION["empId"] = $_POST["IDTextBox"];
    $_SESSION["empTel"] = $_POST["TeleTextBox"];
    $_SESSION["empEmail"] = $_POST["EmailTextBox"];
    $_SESSION["newPos"] = $_POST["position"];
    
    header("Location: Session2.php");
    exit;
}
?>

<div class="row container-fluid">
    <div class="left-side col">
        <br>
        <form method="post" action="Session2.php">
            <div class="col">
                <input type="text" name="firstNameTextBox" placeholder="First Name?" style="margin:2px;" />
                <br>
                <input type="text" name="LastNameTextBox" placeholder="Last Name?" style="margin:2px;" />
                <br>
                <input type="text" name="EmailTextBox" placeholder="Email Address?" style="margin:2px;" />
                <br>
                <input type="text" name="TeleTextBox" placeholder="Telephone Number?" style="margin:2px;" />
                <br>
                <input type="text" name="SinTextBox" placeholder="SIN" style="margin:2px;" />
                <br>
                <input type="text" id="passW" name="passWord" placeholder="Password" style="margin:2px;" />
                <br><br>
                <input type="submit" value="Submit Information" />
        </div>
    </form>
    </div>
</div>

   
<?php
include "Footer.php";
?>