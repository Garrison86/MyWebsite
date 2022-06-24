<?php
include 'Header.php';

echo '<div class="content">';

echo '<h3>Salor Mike\'s Prime Range Generator</h3>';

echo '  Range 1:<input type="number" id="rangeLowText" style="margin:6px 0px;">
        Range 2:<input type="number" id="rangehighText" style="margin:6px 0px;">
        <button type="button" id="rangeLowButton">Generate</button>
        <br>
        <div id="prime"></div></br>';

?>
<script>
    var prime = document.getElementById("prime");
    document.getElementById("rangeLowButton").onclick = function() {
        prime.innerHTML = "<br>";
        rangeL = document.getElementById("rangeLowText").value;
        rangeH = document.getElementById("rangehighText").value;
        
        var index = 0;
        var amount = rangeH - rangeL;
        const rangeArray = [amount];


        for (var numToChk = rangeL; numToChk <= rangeH; numToChk++) {
            var primevalue = true;
            for (var factor = 2; factor <= numToChk/2; factor++) {
                if (numToChk % factor == 0) {
                    primevalue = false;
                    break;
                }
            }
            if (primevalue) {
                rangeArray[index] = numToChk;
                index++;
            }
        }

        for (var i = 0; i < amount; i++) {
            if (rangeArray[i] == undefined) {} else {
                prime.innerHTML += rangeArray[i] + " is a prime number<br>";
            }
        }
    }
</script>

<?php
echo '</div>';

include 'Footer.php';
?>