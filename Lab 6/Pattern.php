<?php
include 'Header.php';  
echo '<div class="content">';
  echo '<br><h3>Crazy Mike\'s Rectangle Generator</h3>';

  echo '<input type="text" id="myHollow" style="margin:6px 0px;">
        <br> 
        <button type="button" id="myHollowBtn">Hollow Rectangle</button>
        <br> 
        <div id="myJsOutput"></div>';
        ?>
<script>
  var myJsOutput = document.getElementById("myJsOutput");
  document.getElementById("myHollowBtn").onclick = function(){
    let hollow = document.getElementById("myHollow").value;
    let string = "";
    
    for (let i = 0; i < hollow; i++) {
      for (let j = 0; j < hollow; j++) {
        if (i === 0 || i === hollow - 1) {
          string += "*";
        }
        else {
          if (j === 0 || j === hollow - 1) {
            string += "*";
          }
          else {
            string += " ";
          } 
        }
        }
        string += "<br>";
      }
      myJsOutput.innerHTML = ("<pre>"+ string +"</pre>");
    }
  </script>
<?php
echo '</div>';
include 'Footer.php';
?>