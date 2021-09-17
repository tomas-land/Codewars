<style>*{background: rgb(40, 108, 148);}</style>

<?php
// mano sprendimas:


//kiti



function duplicateCount($text) {
    return count(array_filter(count_chars(strtolower($text), 1), function ($e) {
        return $e > 1;
      }));
  }




  function duplicateCount1($text) {
    $vls = array_count_values(str_split(strtolower($text)));
    $rpt = array_filter($vls, function($i){
                                  return ($i > 1);
                              });
    return count($rpt);
}