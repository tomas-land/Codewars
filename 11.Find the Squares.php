<style>*{background: rgb(5, 21, 44);color:rgb(183, 69, 218);}</style>
Complete the function that takes an odd integer (0 < n < 1000000) which is the difference between two consecutive perfect squares, and return these squares as a string in the format "bigger-smaller"
<br>
<br>
<br>
<br>
<br>

<?php
// mano sprendimai:

$num=15;
if($num>0 && $num<1000000){
    $bigger=pow(round($num/2),2);
    $smaller=pow((round($num/2)-1),2);
}


echo $bigger."+".$smaller;















//kiti











//built_in functions used: 

//    array_intersect($array,$array);                   palygina du masyvus ir suranda atitinkancias reiksmes
//    preg_match_all(regular expression, string, )      iesko atitikmens pagal regex
//    pow(2,3)=8  or 2**3=8