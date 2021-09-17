<style>*{background: rgb(58, 21, 44);color:rgb(183, 69, 218);}</style>
Return the number (count) of vowels in the given string.

We will consider a, e, i, o, u as vowels for this Kata (but not y).

The input string will only consist of lower case letters and/or spaces.
<br>
<br>
<br>
<br>
<br>

<?php
// mano sprendimai:

$str="abracadabra";
$vowels=["a","e","i","o","u"];
$arr=str_split($str);

print_r(count(array_intersect($arr,$vowels)));



//kiti
function getCount($str) {
  
    $findLetters = ['a', 'e', 'i', 'o', 'u'];
    // enter your magic here
    
    return sizeof(array_intersect(str_split($str), $findLetters));
  }












//built_in functions used: 

//    array_intersect($array,$array);                   palygina du masyvus ir suranda atitinkancias reiksmes
//    preg_match_all(regular expression, string, )      iesko atitikmens pagal regex