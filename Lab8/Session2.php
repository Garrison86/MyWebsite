<?php
include "Header.php";
if(isset($_SESSION["empName"]))
    $firstName = $_SESSION["empName"];
    else
        $firstName = " ";

if(isset($_SESSION["empId"]))
    $emId= $_SESSION["empId"];
    else
        $emId = " ";

if(isset($_SESSION["empTel"]))
    $tele = $_SESSION["empTel"];
    else
        $tele = " ";

if(isset($_SESSION["empEmail"]))
    $eMail = $_SESSION["empEmail"];
    else
        $eMail = " ";

if(isset($_SESSION["newPos"]))
    $posit = $_SESSION["newPos"];
    else
        $posit = " ";
        
        echo <<<_END
        
        <div>
        <h2 style="text-align: center">Emplyee Information</h2>
            <br />
            <div style="background-color:rgb(227,233,241) ;font-size: 20px;">
            <p>The name you entered: $firstName</p>
            <p>The name you entered: $emId</P>
            <p>The name you entered: $tele</P>
            <p>The name you entered: $eMail</P>
            <p>The name you entered: $posit</P>
            </div>
        </div>
   
_END;

include "Footer.php";
     
  ?>