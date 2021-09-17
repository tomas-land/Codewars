<style>*{background: rgb(40, 108, 148);}</style>

<?php

// $n=10;

// for($i=1;$i<=$n;$i++){
// echo '\'';
// for($j=$n-1;$j>=$i;$j--){
//     echo '&nbsp';
    
// }
// for($k=0;$k<=($j*2);$k++){
//         echo '*';
//     }

// for($j=$n-1;$j>=$i;$j--){
//     echo '&nbsp';
// }

// echo '\''. "<br>";

// }

$array=[];
$space='-';
$star='*';
$n=5;
for($i=1;$i<=$n;$i++){
$spaces=str_repeat($space,$n-$i).str_repeat($star,(2*$i)-1).str_repeat($space,$n-$i);

 array_push ($array, $spaces);
       



}

print "<pre>";
print_r($array);