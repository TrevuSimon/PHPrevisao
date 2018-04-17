<?php
$numero = 100;

echo "O numero inteiro e positivo é".$numero." e seus divisores são:<br>";
for ($i = 1 ; $i < $numero; $i++) {
  if(($numero % $i) == 0){
    echo $i.", ";
  }
}
echo $numero;

 ?>
