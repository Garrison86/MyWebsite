<?php
    session_start();
    require 'Class-Files/User.php';
    
    $missingFields = false;
    $webUser;
    $bool = false;

    if( isset($_POST['submit']) ){
        if( isset($_POST['username']) && isset($_POST['password']) ){
            if( $_POST['username'] != "" || $_POST['password'] != "" ){
                $webUser = new WebUser();
                $user = $_POST['username'];
                $password = $_POST['password'];
                $bool = $webUser->authenticate($user, $password);
                if( $bool ){
                    $_SESSION['webUser'] = serialize($webUser);
                    $_SESSION['bool'] = $bool;
                    header('location:internal.php?');
                }
            } 
            else {
                $missingFields = true;
                $_SESSION['bool'] = false;
            }
        }
    }

    include 'essentials/header.php';
    
    if( $missingFields ){
        echo '<h3 style="color:red;">Please enter both a username and a password</h3>';
    }
    
    //Authentication failed
    if(isset($webUser)){
        if( !$webUser->isAuthenticated() ){
            echo '<h3 style="color:red;">Login failed. Please try again.</h3>';
        }
    }
        
    echo
        '<form name="login" id="login" method="POST" action='.$_SERVER['PHP_SELF'].'>
            <table>
                <tr>
                    <td>Username:</td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="submit" value="Login"></td>
                    <td><input type="reset" name="reset" value="Reset"></td>
                </tr>
            </table>
        <p>Session ID:' . session_id() . '</p>
        </form>';

    include 'essentials/footer.php';
?>
   