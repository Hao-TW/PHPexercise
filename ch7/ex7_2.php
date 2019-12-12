<?php
function sum(...$n){
    $total=0;
    foreach($n as $i){
        $total+=$i;
    }
    return $total;
}
print"TOTAL: ".sum(1,3,5,7,9);
?>