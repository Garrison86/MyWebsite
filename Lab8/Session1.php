<?php


include "Header.php";

echo '<div>';
if (isset($_SESSION["firstName"])) {
    echo "Your firstName is: " . $_SESSION["firstName"];
}
echo '</div>';
include "Footer.php";
?>