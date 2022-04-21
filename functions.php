<?php
$num1 = $_GET["num1"];
$oper = $_GET["oper"];
$num2 = $_GET["num2"];
$result = 0;

function myCalculator($num1, $oper, $num2) {
  
if(is_numeric($num1) && is_numeric($num2)) {
  switch ($oper) {
    case "add";
      $result = $num1 + $num2;
      break;

    case "sub";
      $result = $num1 - $num2;
      break;
    
    case "multiply";
      $result = $num1 * $num2;
      break;

    case "division";
      $result = $num1 / $num2;
      break;
    }
    return $result;
  }
    
}


  ?>