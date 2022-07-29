<?php
session_start(); 
if (isset($_POST["submit"]))
{ 
    $_SESSION["empEmail"] = $_POST["empEmailTextBox"];
    $_SESSION["empPass"] = $_POST["passTextBox"];
    
    
    header("Location: ViewAllEmployees.php");
    exit;
}
include "Header.php";
?>

<div class="row container-fluid" style="text-align: center">
    <div class="left-side" style="height: 400px; ">
        <br>
        <h3>Create your new Account</h3>
        <form method="post" action="Login.php">
            <div class="col">
                <br>
                <input type="text" name="empEmailTextBox" placeholder="Email Address?" style="margin:2px;" />
                <br>
                <input type="text" name="passTextBox" placeholder="Password" style="margin:2px;" />
                <br><br>
                <input type="submit" value="Submit Information" />
        </div>
    </form>
    </div>
</div>
<?php include "Footer.php";
?>