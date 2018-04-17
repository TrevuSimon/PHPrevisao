<?php
$num1 = 50;
$num2 = 100;

if($num1 < $num2){
  for (; $num1 <= $num2; $num1++) {
    echo $num1."<br>";
  }
}else {
  for (; $num2 <= $num1; $num2++) {
    echo $num2."<br>";
  }
}
 ?>
