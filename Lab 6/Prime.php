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
        var primeString = "is a prime number";
        var amount = rangeH - rangeL;
        const rangeArray = [amount];
        let length = rangeArray.length;

        prime.innerHTML += length+"<br>";
        prime.innerHTML += amount+"<br>";
        prime.innerHTML += primeString+"<br>";

        
        for(var i=0; i<=amount; i++){
            rangeArray[i]= rangeL++;
            prime.innerHTML += rangeArray[i]+"<br>";
        }
     

    }

     
    
</script>
<?php
echo '</div>';

include 'Footer.php';
?>