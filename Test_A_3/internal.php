<?php 
session_start();
session_regenerate_id(true);
require 'Class-Files/User.php';

$bool = $_SESSION['bool'];

if( !isset($_SESSION['webUser']) || !$bool )
    header('location:login.php');

$obj = unserialize($_SESSION['webUser']);

if( isset($obj) && !$bool )
     header('location:login.php');


include 'essentials/header.php';
    echo
    '<br><br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-sm-1">
            </div>

            <div class="col-sm-10">
                <h1>Internal Page</h1><br>
                <h2>This is a restricted area Welcome, '.$obj->getUsername().'</h1>
                <br>
                <a href="essentials/logout.php">Logout!</a>
                <br><br>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et scelerisque ex. 
                    Nam tempus pulvinar condimentum. Morbi leo ipsum, feugiat ac neque nec, euismod posuere sapien. 
                    Nullam porta ligula et nibh malesuada condimentum. Praesent convallis, arcu quis vestibulum aliquet, 
                    purus sapien feugiat metus, iaculis bibendum turpis nulla vel orci. 
                    Cras nulla purus, vestibulum at varius sed, placerat a lacus. Sed id scelerisque libero.
                    Sed eu eros sit amet neque efficitur pellentesque sed a odio. Sed faucibus ullamcorper nunc, sed 
                    dignissim mi placerat vitae. Integer porta vitae eros at mattis. Sed porta urna et odio cursus 
                    placerat nec vitae nulla. Maecenas aliquam commodo ante, ac interdum risus pulvinar ac. Duis suscipit, 
                    lorem in rhoncus pretium, massa dolor varius felis, in fermentum purus erat a felis. Morbi eu sagittis velit, a laoreet risus.
                    Pellentesque condimentum arcu in hendrerit tincidunt. Cras velit nisl, tincidunt nec libero eu, sagittis 
                    commodo leo. Cras dignissim orci ac nunc viverra, sed iaculis orci varius. Mauris venenatis tellus sed 
                    neque auctor, sit amet laoreet leo lacinia. Vestibulum sit amet mi libero. Donec vehicula dui sed leo 
                    imperdiet tincidunt. Aliquam maximus augue id erat iaculis malesuada.
                    Sed in tristique massa, fermentum porta eros. Nam pretium ligula in tortor bibendum iaculis. Mauris 
                    quis nisl massa. Ut ultrices elementum dolor, maximus iaculis magna vestibulum at. Nam imperdiet ante at 
                    arcu fermentum vestibulum. Pellentesque imperdiet purus ut congue auctor. Nullam condimentum tincidunt 
                    dui at consequat. Quisque quis bibendum nibh, ut eleifend turpis. Suspendisse ante diam, facilisis et 
                    iaculis semper, egestas eget neque. Mauris vulputate venenatis sapien non luctus. In tristique 
                    iaculis leo, eget molestie risus cursus eu. Nam sit amet sapien eu enim iaculis posuere.
                    Donec ornare risus at nulla iaculis, ut ornare urna mollis. Proin mi purus, 
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
    </div><br><br><br><br>';

   include 'essentials/footer.php';
?>