<?php session_start(); 

if (isset($_POST["submit"]))
{ 
    $_SESSION["empFirstName"] = $_POST["firstNameTextBox"];
    $_SESSION["empLastName"] = $_POST["LastNameTextBox"];
    $_SESSION["empEmail"] = $_POST["EmailTextBox"];
    $_SESSION["empTele"] = $_POST["TeleTextBox"];
    $_SESSION["empSIN"] = $_POST["SinTextBox"];
    $_SESSION["empPass"] = $_POST["passWord"];
    
    header("Location: MySQLInsert.php");
    exit;
}
include "Header.php";
?>

<div class="row container-fluid" style="text-align: center">
    <div class="left-side" style="height: 400px; ">
        <br>
        <h3>Create your new Account</h3>
        <form method="post" action="CreateAccount.php">
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
                <input type="text" name="passWord" placeholder="Password" style="margin:2px;" />
                <br><br>
                <input type="submit" value="Submit Information" />
        </div>
    </form>
    </div>
</div>

   
<?php
include "Footer.php";
?>