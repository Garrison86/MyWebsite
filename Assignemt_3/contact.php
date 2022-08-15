<?php
    session_start();
    require "WebSiteUser.php";
    include "Header.php";

    $messSpace = "";
    if( isset($_POST["customerfName"]) && isset($_POST["customerlName"])
        && isset($_POST["phoneNumber"]) && isset($_POST["emailAddress"])
        && isset($_POST["username"])&& $_POST["referral"]  != "refer") {

            if($_POST["customerfName"] != ""  && $_POST["customerlName"] != ""
            && $_POST["phoneNumber"] != "" && $_POST["emailAddress"] != ""
           && $_POST["username"] != "" && $_POST["referral"] != ""){
            
            $WebsiteUser = new WebsiteUser();
            $messSpace = $WebsiteUser->insertuser(
                $_POST["customerfName"],
                $_POST["customerlName"],
                $_POST["phoneNumber"],
                $_POST["emailAddress"],
                $_POST["userName"],
                $_POST["referral"]);
                
                
                echo $messSpace;
            }
            else
            echo "Blank fields detected";
         } 
            else 
            echo "Enter all feilds";
        

    
    
echo <<< _END
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


                <form action="contact.php" id="frmNewsletter" method="post" >
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
                            <td><select type="radio" name="referral" size="1">
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
                                <input type='reset' name='btnReset'  value='Reset Form'>
                            </td>
                        </tr>
                    </table>
                </form>
            </div><!-- End Main -->
        </div><!-- End Content -->
    </div>
_END;

    include "Footer.php";
?> 