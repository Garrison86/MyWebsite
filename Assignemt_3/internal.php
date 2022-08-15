<?php 

session_start();
include 'Header.php';
session_regenerate_id(true);

require 'User.php';

$bool = $_SESSION['bool'];

if( !isset($_SESSION['webUser']) || !$bool )
    header('location:login.php');

$obj = unserialize($_SESSION['webUser']);

if( isset($obj) && !$bool )
     header('location:login.php');

    echo
    '<br><br>
    <div class="container">
        <div class="row">
            <div class="col-sm-1">
            </div>

            <div class="col-sm-10">
                <h1>Internal Page</h1><br>
                <h2>Welcome, '.$obj->getUsername().'</h1>
                <br>
                <a href="logout.php">Logout!</a>
                <br><br>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et scelerisque ex. 
                    Nam tempus pulvinar condimentum. Morbi leo ipsum, feugiat ac neque nec, euismod posuere sapien. 
                    Nullam porta ligula et nibh malesuada condimentum. Praesent convallis, arcu quis vestibulum aliquet, 
                    purus sapien feugiat metus, iaculis bibendum turpis nulla vel orci. 

    
                    molestie et sodales et, fringilla ut velit. Quisque in sapien vulputate, fermentum eros ac, 
                    vulputate orci. Proin blandit sollicitudin nibh, ullamcorper euismod massa consequat quis.
                    Mauris pellentesque volutpat ante at ullamcorper. Fusce eu augue accumsan, consectetur est 
                    sed, ornare nibh. In scelerisque ex a commodo tempus. Maecenas tincidunt quis mi eu pellentesque. 
                    Maecenas hendrerit efficitur turpis, vel ornare nibh condimentum sed. Mauris aliquet nulla vitae 
                    lacinia faucibus. Proin sodales mollis quam ac mattis. Integer porta neque ipsum, eu dignissim 
                    tortor pulvinar vel. Nunc venenatis mauris ante, eu ornare odio feugiat eget. Cras quis leo 
                    facilisis, condimentum diam nec, facilisis tellus. Maecenas facilisis lacus condimentum felis pulvinar, vitae maximus lacus consequat.
                </p>
            </div>

            <div class="col-sm-1">
            </div>
        </div>
    </div><br>';
include 'Footer.php';
?>
