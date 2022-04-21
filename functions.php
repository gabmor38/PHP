<?php

function myCalculator($num1, $oper, $num2) {
  $sum=0;

  switch ($oper) {
    case "add";
      $sum = $num1 + $num2;
      break;

    case "sub";
      $sum = $num1 - $num2;
      break;
  }
    return $sum;
}

  $num1 = $_GET["num1"];
  $oper = $_GET["oper"];
  $num2 = $_GET["num2"];

  
  echo "Total: " . myCalculator($num1, $oper, $num2);

  ?>