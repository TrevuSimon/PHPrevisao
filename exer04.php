<?php
$ano = 2008;
bisexto($ano);

function bisexto($value){
  $bissexto= date('L', mktime(0, 0, 0, 1, 1, $value));
  echo $value . ' ' . ($bissexto? 'é' : 'não é') . ' um ano bissexto.';
}
 ?>
