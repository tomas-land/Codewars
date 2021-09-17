<style>*{background: rgb(40, 108, 148);}</style>

<?php

// mano sprendimas:
function past_time($s, $m,$h) {

$s=$s*1000;
$m=$m*60000;
$h=$h*3600000;
 return $h+$m+$s;

}
echo past_time(1,0,1);

// Kiti

function past($h, $m, $s) {
    return (($h * 60 * 60) + $m * 60 + $s) * 1000;
  }