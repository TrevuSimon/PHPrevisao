<?php
$sal = 300;

echo "salario de ".$sal;
if($sal > 300){
  $sal = $sal * 1.3;
}else {
  $sal = $sal * 1.5;
}
echo " foi reajustado para ".$sal;
 ?>
