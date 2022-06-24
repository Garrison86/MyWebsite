<?php
include 'Header.php';

echo '<div class="content">';

echo '<h3>Salor Mike\'s Odd\Even beer song generator</h3>';

echo '<input type="text" id="oddEvenText" style="margin:6px 0px;"></br>
        <button type="button" id="oddEvenButton">Sing That Song</button>
        <div id="oddEven"></div></br>';

?>
<script>
    var oddEven = document.getElementById("oddEven");
    document.getElementById("oddEvenButton").onclick = function() {
        oddEven.innerHTML = "<br>";
        beerAmt = document.getElementById("oddEvenText").value;
        var beerEven = "bottles of beer can serve even number of guests";
        var beerOdd = "bottles of beer can serve odd number of guests";
        var beerOnlyOne = "bottle of beer can serve ONLY ONE guest";

        for (var i = beerAmt; i > 0; i--) {
            if(beerAmt === 1){
                oddEven.innerHTML += beerAmt + " " + beerOnlyOne + "\n<br>";
            }
            else if (beerAmt % 2 === 0) {
                oddEven.innerHTML += beerAmt + " " + beerEven + "\n<br>";
            }
            else {
                oddEven.innerHTML += beerAmt + " " + beerOdd + "\n<br>";
            }
            beerAmt--;
            oddEven.innerHTML += "<br>";
        }
    }
</script>
<?php
echo '</div>';

include 'Footer.php';
?>