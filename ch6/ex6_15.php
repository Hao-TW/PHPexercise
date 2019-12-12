<?php
$sum = 0;
$i = 1;
do {
  $sum += $i;
  $i++;
} while ($i <= 50);
?>

<?php
  $sum = 0;
  $i = 0;
  while (true){
    $i++;
    $sum += $i;
    if ( $sum >= 100) break;
  }
  echo "\$sum : $sum";
?>