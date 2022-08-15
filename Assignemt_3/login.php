<?php
    session_start();
    include "Header.php";
    require ("db_config.php");
    require_once ('WebsiteUser.php');
    

    $error = "";

    // if(isset($_SESSION['websiteUser'])){
    //     if($_SESSION['websiteUser']->isAuthenticated()){
    //         session_write_close();
    //     if($_SESSION['websiteUser']->isAuthenticated()){
    //         header('Location:restricted.php');
    
    $missingFields = false;

        if( ! isset($_POST['username']) && ! isset($_POST['password'])){
                $error = " Please fill in all the following information";
                $missingFields = true;
            } else {

                if($_POST['username'] != "" || $_POST['password'] != ""){
                    $connection = mysqli_connect ( $servername, $username, $password, $dbname );


                    if (mysqli_connect_errno ()) {
                        die ( "Failed to connect to database: " . mysqli_connect_error () );
                    }
                    
                    $query = 'SELECT * FROM  adminuser WHERE Username LIKE  "' . $_POST["username"] . '%" AND Password LIKE  "' . $_POST["password"] . '%"';
                    $count = mysqli_query ( $connection, $query );

                    if (mysqli_num_rows ( $count ) != 0) {
                        // $websiteUser = new WebUser();
                        // if(!$websiteUser->dba_exists){

                        $_SESSION ["username"] = $_POST ["username"];
                        $_SESSION ['password'] = $_POST ["password"];

                        echo "<script type='text/javascript'>window.top.location='internal.php';</script>";
                        exit ();
                        
                    }else{

                            echo '<div id="content" class="clearfix">';
                            echo '<h6 style="color:red;">Password not correct.</h6>';
                            echo '</div>';
                            include "Footer.php"; 
                        }
                    }


                    if (  isset($_SESSION ['websiteUser'] )) {
                            if ($_SESSION ['websiteUser']->isAuthenticated ()) {
                            date_default_timezone_set("America/Toronto");
                            $sqlQuery = "UPDATE adminuser SET lastlogin = '". date("Y/m/d")."' WHERE username = '".$_POST["username"]."' AND passwords = '".$_POST["password"]."'";
                            echo '<meta http-equiv = "refresh" content = "0; url = internal.php" />';
                            session_write_close ();
                            header('Location:restricted.php');
                        }
                    }

                }
                
                // $websiteUser->authenticate($username, $password);
                
            //     if($websiteUser->authenticate){
            //         $_SESSION['websiteUser'] = $websiteUser;
            //         date_default_timezone_set("America/Toronto");
            //         $sqlQuery = "UPDATE adminuser SET lastlogin = '". date("Y/m/d")."' WHERE username = '".$_POST["username"]."' AND passwords = '".$_POST["password"]."'";
            //         echo '<meta http-equiv = "refresh" content = "0; url = internal.php" />';
            //         // header('Location:restricted.php');
            // }
        


            //Missing username/password
            if($missingFields){
                echo '<h6 style="color:red;">Please enter both a username and a password</h6>';
            }
            
            //Authentication failed
            if(isset($websiteUser)){
                if(!$websiteUser->isAuthenticated()){
                    echo '<h3 style="color:red;">Login failed. Please try again.</h3>';
                }
            }
        
            $missingFields = false;
	if (isset ( $_POST ['submit'] )) {
		if (isset ( $_POST ['username'] ) && isset ( $_POST ['password'] )) {
			if ($_POST ['username'] == "" || $_POST ['password'] == "") {
				$missingFields = true;
			} else {
				// All fields set, fields have a value
				$websiteUser = new WebsiteUser ();
				if (! $websiteUser->hasDbError ()) {
					$username = $_POST ['username'];
					$password = $_POST ['password'];
					$websiteUser->authenticate ( $username, $password );
					if ($websiteUser->isAuthenticated ()) {
						$_SESSION ['websiteUser'] = $websiteUser;
						header ( 'Location:restricted.php' );
					}
				}
			}
		}
	}

    
    //  echo $_SERVER['PHP_SELF'];
    ?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Login</title>
</head>
<body>
    	<!-- MESSAGES -->
        <?php
								// Missing username/password
								if ($missingFields) {
									echo '<h5 style="color:red;">Please enter username and password</h5>';
								}
								
								// Authentication failed
								if (isset ( $websiteUser )) {
									if (! $websiteUser->isAuthenticated ()) {
										echo '<h6 style="color:red;">Please try again.</h6>';
									}
								}
								?>

        <form name="login" id="login" method="post" action="login.php">
        <table>
            <tr>
                <td>Username:</td>
                <td><input type="text" name="username" id="username"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password" id="password"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" id="submit" value="Login"></td>
                <td><input type="reset" name="reset" id="reset" value="Reset"></td>
            </tr>
        </table>
        <?php  include "Footer.php";?>
    </form>
</body>
</html>

