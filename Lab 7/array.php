<?php
include 'Header.php';  
echo '<div class="content">';
  echo '<br><h3>Array</h3>';

/* ===================== No Key Array - Output using foreach Below ================================*/
  echo '<br>
        <h4>No Key Array - Output using foreach</h4>
        <p id="stringKeyArray"></p>';
?>
<script>
let text = "";
var stringKeyArray = ["10", "20", "30", "40", "50"];

stringKeyArray.forEach(myFunction);

document.getElementById("stringKeyArray").innerHTML = text;

function myFunction(item, index) {
    text += "Key : " + index + " Value : " + item + " data type: integer"+"<br>"; 
}
</script>

<?php
/* ===================== No Key Array - Output using var_dump below ================================*/
  
echo '<h4>No Key Array - Output using var_dump</h4>';
  $noKey = array(10, 20, 30,40, 50);
  echo var_dump($noKey) . "<br>";
  echo "<br>";

/* ===================== String Key Array - Output using var_dump below ================================*/
  
echo '<h4>String Key Array - Output using var_dump</h4>';
  $stringDump = array("Key1", "Key2", "Key3");
  echo var_dump($stringDump) . "<br>";


/* ===================== No Key Array - Output using var_dump below ================================*/
  
echo '<br>
<h4>String Key Array - Output using foreach</h4>';
$stringKey = array("Key1"=>"item 1", "Key2"=>"item 2", "Key3"=>"item 3", "Key4"=>"item 4", "Key5"=>"item 5"); 

foreach ($stringKey as $value => $val) {
  echo "key $value value: $val key data type string <br>";
} 


/* =====================Int Key Array - Output using var_dump below ================================*/
  
echo '<br>
<h4>Integer Key Array - Output using var_dump</h4>';

$intDump = array(1, 2, 3, 4, 5);
echo var_dump($intDump) . "<br>";


/* =====================Int Key Array - Output using var_dump below ================================*/
  
echo '<br>
<h4>Integer Key Array - Output using foreach</h4>';

$intForEach = array(1=>1, 2=>2, 3=>3, 4=>4, 5=>5);
foreach ($intForEach as $value => $val) {
    echo "key $value value: $val key data type string <br>";
  } 

/* =====================Mixed Key Array - Output using var_dump below ================================*/
  
echo '<br>
<h4>Mixed Key Array - Output using var_dump</h4>';

$mixDump = array(1,2,3, "one","two","three", array("arr1", "arr2", "arr3"));
echo var_dump($mixDump) . "<br>";


/* =====================Multi-Dimentional Key Array - Output using var_dump below ================================*/
  
echo '<br>
<h4>Multi-Dimentional Key Array - Output using foreach</h4>';

$multiFor = array(array("Array 1",11, 22,33),array("Array 2",44,55,66));
foreach ($multiFor as $mul1 => $arr1) {
  foreach ($arr1 as $mul2 => $arr2) {
    echo "Level 1 ".$mul2." of ".$mul1." Value is: " .$arr2. " <br>";
  } 
}



echo '</div>';
include 'Footer.php';
?>