<?php
    
//========================================================================

    $mysqli = new mysqli($servername, $username, $password, $dbname);
    include "WebsiteUser";
    include "Header.php"; ?>
<?php
//================================================================================
    if (isset($_POST["customerfName"]) && isset($_POST["customerlName"])
        && isset($_POST["phoneNumber"]) && isset($_POST["emailAddress"])
        && isset($_POST["referral"]) && isset($_POST["username"])) 
        {
            $WebsiteUser = new WebsiteUser();

            $WebsiteUser->insertuser($_POST["customerfName"],$_POST["customerlName"],$_POST["phoneNumber"],$_POST["emailAddress"],$_POST["userName"],$_POST["referral"]);
    
            // $_SESSION["firstName"] = $_POST["customerfName"];
            // $_SESSION["lastName"] = $_POST["customerlName"];
            // $_SESSION["phoneNumber"] = $_POST["phoneNumber"];
            // $_SESSION["emailAddress"] = $_POST["emailAddress"];
            // $_SESSION["username"] = $_POST["userName"];
            // $_SESSION["referrer"] = $_POST["referral"];
            header("Location: MailingList.php");
            exit;
        } else {
            echo '<div class="col" style="background: white; margin: 10px; padding: 5px">';
            if (isset($_POST["customerfName"]) == NULL)
                echo "First name was not entered <br>";
            if (isset($_POST["customerlName"]) == NULL)
                echo "Last Name was not entered<br>";
            if (isset($_POST["phoneNumber"]) == NULL)
                echo "Phone number was not entered<br>";
            if (isset($_POST["emailAddress"]) == NULL)
                echo "Email address was not entered<br>";
            if (isset($_POST["referral"]) == NULL)
                echo "Please select a referal type<br>";
            if (!isset($_POST["username"]) == NULL)
                echo "User name was not entered<br>";
            echo "</div>";
        }

    ?>
    <div id="wrapper">
        <div id="content" class="clearfix">

            <div class="col" style="background-color:moccasin; 
            font-family: 'Abel', sans-serif; 
            font-size:30px; padding: 10px;">
                <aside>
                    <p>Mailing Address<br>
                        1385 Woodroffe Ave<br>
                        Ottawa, ON K4C1A4<br>
                        Phone Number<br>
                        (613)727-4723<br>
                        Fax Number<br>
                        (613)555-1212<br>
                        Email Address<br>
                        info@wpeatery.com</p>
                </aside>
            </div>

            <div class="main">
                <h1>Sign up for our newsletter</h1>
                <p>Please fill out the following form to
                    be kept up to date with news, specials,
                    and promotions from the WP eatery!</p>


                <form name="frmNewsletter" id="frmNewsletter" method="post" action="contact.php">
                    <table>
                        <tr>
                            <td>First Name:</td>
                            <td><input type="text" name="customerfName" id="customerfName" size='40'></td>
                        </tr>
                        <tr>
                            <td>Last Name:</td>
                            <td><input type="text" name="customerlName" id="customerlName" size='40'></td>
                        </tr>
                        <tr>
                            <td>Phone Number:</td>
                            <td><input type="text" name="phoneNumber" id="phoneNumber" size='40'></td>
                        </tr>
                        <tr>
                            <td>Email Address:</td>
                            <td><input type="text" name="emailAddress" id="emailAddress" size='40'>
                        </tr>
                        <tr>
                            <td>Username:</td>
                            <td><input type="text" name="userName" id="username" size='20'>
                        </tr>
                        <tr>

                            <td>How did you hear<br> about us?</td>
                            <td>
                                <select type="radio" name="referral" size="1">
                                    <option>Select referer</option>
                                    <option value="newspaper">Newspaper</option>
                                    <option value="radio">Radio</option>
                                    <option value="tv">Television</option>
                                    <option value="other">Other</option>
                                </select>
                            </td>


                        </tr>
                        <tr>
                            <td colspan='2'>
                                <input type='submit' name='btnSubmit' id='btnSubmit' value='Sign up!'>&nbsp;&nbsp;
                                <input type='reset' name="btnReset" id="btnReset" value="Reset Form">
                            </td>
                        </tr>
                    </table>
                </form>
            </div><!-- End Main -->
        </div><!-- End Content -->
    </div>
<?php

include "Footer.php";

// action="newsletterSignup.php"
?>