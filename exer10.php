<?php
$a = 1;
$b = 2;
$c = 1;
$d = 2;

$ac = $a + $c;

$bd = $b * $d;

if($ac > $bd){
  echo "soma de A e C é maior que a multiplicação de B e D";
}elseif ($ac < $bd) {
  echo "soma de A e C é menor que a multiplicação de B e D";
}else {
  echo "soma de A e C é igual que a multiplicação de B e D";
}

?>
