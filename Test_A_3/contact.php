<?php 
    require 'Class-Files/User.php';
    include 'essentials/header.php';

    $message = "";
    if( isset($_POST["firstName"]) 
    && isset($_POST["lastName"]) 
    && isset($_POST["phoneNumber"]) 
    && isset($_POST["email"]) 
    && isset($_POST["username"]) 
    && $_POST["referral"] != "refer" ) {
        
        if( $_POST["firstName"] != "" 
        && $_POST["lastName"] != "" 
        && $_POST["phoneNumber"] != "" 
        && $_POST["email"] != "" 
        && $_POST["username"] != "" 
        && $_POST["referral"] != "" ){
            
            $user = new WebUser();
            $message = $user->insertUser( $_POST["firstName"], 
                                          $_POST["lastName"], 
                                          $_POST["phoneNumber"],
                                          $_POST["email"], 
                                          $_POST["username"],
                                          $_POST["referral"] );
            echo $message;
        }
        else echo 'No fields can be left blank';
    }
    else echo 'Enter all fields';


echo <<< _END
    <div id="wrapper">
        <div id="content" class="clearfix">
            <aside>
                    <h2>Mailing Address</h2>
                    <h3>1385 Woodroffe Ave<br>
                        Ottawa, ON K4C1A4</h3>
                    <h2>Phone Number</h2>
                    <h3>(613)727-4723</h3>
                    <h2>Fax Number</h2>
                    <h3>(613)555-1212</h3>
                    <h2>Email Address</h2>
                    <h3>info@wpeatery.com</h3>
            </aside>
            <div class="main">
                <h1>Sign up for our newsletter</h1>
                <p>Please fill out the following form to be kept up to date with news, specials, and promotions from the WP eatery!</p>
                
                <form action="contact.php" id="frmNewsletter" method="POST" >
                    <table>
                        <tr>
                            <td>First Name:</td>
                            <td><input type="text" name="firstName" size='40'></td>
                        </tr>
                        <tr>
                            <td>Last Name:</td>
                            <td><input type="text" name="lastName"  size='40'></td>
                        </tr>
                        <tr>
                            <td>Phone Number:</td>
                            <td><input type="text" name="phoneNumber" size='40'></td>
                        </tr>
                        <tr>
                            <td>Email Address:</td>
                            <td><input type="text" name="email" size='40'>
                        </tr>
                         <tr>
                            <td>Username:</td>
                            <td><input type="text" name="username" size='20'>
                        </tr>
                        <tr>
                            <td>How did you hear<br> about us?</td>
                            <td>
                               <select name="referral" size="1">
                                  <option value="refer">Select referer</option>
                                  <option value="newspaper">Newspaper</option>
                                  <option value="radio">Radio</option>
                                  <option value="tv">Television</option>
                                  <option value="other">Other</option>
                               </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan='2'>
                            <input type='submit' name='btnSubmit' value='Sign up!'>&nbsp;&nbsp;
                            <input type='reset' name="btnReset" value="Reset Form"></td>
                        </tr>
                    </table>
                </form>
            </div><!-- End Main -->
        </div><!-- End Content -->
    </div><!-- End wrapper -->
_END;

    include "Footer.php";
?>