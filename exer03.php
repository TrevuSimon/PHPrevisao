<?php
$v1 = 5;
$v2 = 6;
$v3 = 1;

if($v1 > $v2 && $v1 > $v3){
  echo "valor da primeira venda é maior, sendo ". $v1;
}elseif($v2 > $v3){
  echo "valor da segunda venda é maior, sendo ". $v2;
}else {
  echo "valor da terciera venda é maior, sendo ". $v3;
}

?>
