<?php
include 'Header.php';
echo '<div class="content">';
echo '<br><h3>Calculator</h3>';

ini_set('display_errors', 0);
$flag = 0;

if (isset($_REQUEST['calculate'])) {
  $operator = $_REQUEST['operator'];
  $n1 = $_REQUEST['first_value'];
  $n2 = $_REQUEST['second_value'];

  if ($operator == "+") {
    $res = $n1 + $n2;
  }
  if ($operator == "-") {
    $res = $n1 - $n2;
  }
  if ($operator == "*") {
    $res = $n1 * $n2;
  }
  if ($operator == "/") {
    $res = $n1 / $n2;
  }
}

?>
<form class="calculator">
  <table>
    <tr>
      <td style="color:black">Enter Number</td>
      <td colspan="1">
        <input name="first_value" type="text" />
      </td>
    </tr>

    <tr>
      <td style="font-size:12px;">Select Operator</td>
      <td>
        <select name="operator">
          <option>+</option>
          <option>-</option>
          <option>*</option>
          <option>/</option>
        </select>
      </td>
    </tr>

    <tr>
      <td style="color:black">Enter Number</td>
      <td class="auto-style5">
        <input name="second_value" type="text" />
      </td>
    </tr>

    <tr>
      <td></td>
      <td><input type="submit" name="calculate" value="Calculate" /></td>
    </tr>
  </table>

  <tr>
    <td style="color:black">Output = </td>
    <td style="rgb(91,192,222); font-size:30px;"><?php  ?></td>
    <?php
    if ($_REQUEST['first_value'] == NULL || $_REQUEST['second_value'] == NULL) {
      echo "Incorrect input.. please try again <br>";
    }else{
    if (isset($_REQUEST['calculate'])) {
      if ($res === 1) {
        echo $res . " is odd <br>";
      } else if ($res % 2 === 0) {
        echo $res . " is even <br>";
      } else {
        echo $res . " is odd <br>";
      }
    }
    if (isset($_REQUEST['calculate'])) {
      for ($i = 2; $i <= ($res / 2); $i++) {
        if ($res % $i == 0) {
          $flag = 1;
          break;
        }
      }
      if ($flag == 0) {
        echo  "$res is a prime number ";
      } else {
        echo  "$res is NOT a prime number ";
      }
    }
  }
    ?>
  </tr>
</form>

<?php
echo '</div>';
include 'Footer.php';
?>