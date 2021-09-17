<style>*{background: rgb(40, 108, 148);}</style>

You are given an odd-length array of integers, in which all of them are the same, except for one single number.

Complete the method which accepts such an array, and returns that single different number.

The input array will always be valid! (odd-length >= 3)

Examples
[1, 1, 2] ==> 2
[17, 17, 3, 17, 17, 17, 17] ==> 3
<br>
<br>
<br>
<br>
<br>

<?php
// mano sprendimas:
$arr=[1,1,2,1];
print_r(array_pop(array_unique($arr)));


// kitas mano:

$arr=[1,1,2,1];
sort($arr);
foreach($arr as $values){
if($value[0]==$value[1]){
   return array_pop($arr);
} else {
    return array_shift($arr);
}
}




//kiti
// suskaiciuoja masyve kiek kartu kartojasi reiksmes ir kadangi 2 skaicius kartojasi viena karta tai su array_search ivedes parametra 1 susiranda ta reiksme:
$arr=[1,1,2,1];
return array_search(1, array_count_values($arr));