<?php
include 'Header.php';

echo '<div class="content">';

echo '<h3>Salor Mike\'s beer song generator</h3>';

echo '<input type="text" id="beerText" style="margin:6px 0px;"></br>
        <button type="button" id="beerChoursSongButton">Sing That Song</button>
        <div id="myJsOutput"></div></br>';
?>
<script>
    var myJsOutput = document.getElementById("myJsOutput");
    document.getElementById("beerChoursSongButton").onclick = function() {
        myJsOutput.innerHTML = "<br>";
        beerAmount = document.getElementById("beerText").value;
        var beerChours1 = "bottles of beer on the wall...";
        var beerChours2 = "bottles of beer...";
        var beerChours3 = "you take one down pass it around....";

        for (var i = beerAmount; i > 0; i--) {
            myJsOutput.innerHTML += beerAmount + " " + beerChours1 + "\n<br>";
            myJsOutput.innerHTML += beerAmount + " " + beerChours2 + "\n<br>";
            myJsOutput.innerHTML += beerChours3 + "\n<br>";
            beerAmount--;
            myJsOutput.innerHTML += beerAmount + " " + beerChours1 + "\n<br>";
            myJsOutput.innerHTML += "<br>";
        }
    }
</script>
<?php
echo '</div>';

include 'Footer.php';
?>