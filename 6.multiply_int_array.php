<style>*{background: rgb(40, 108, 148);}</style>

<?php
// mano sprendimas:
$arr=[1,2,3];
$counter=1;
for($i=0;$i<count($arr);$i++){
  $counter=$counter*$arr[$i];
}
 echo $counter;

//  kiti sprendimai

function grow($a) {
  
    if ( !empty($a) ) {
          return $result = array_product($a);
      }
  }