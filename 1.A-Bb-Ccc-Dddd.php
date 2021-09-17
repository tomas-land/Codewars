<?php
//  $spl_arr=str_split('kodas',1);
//  print_r(strtoupper($spl_arr[0]).'-'.
//  strtoupper($spl_arr[1]).$spl_arr[1].'-'.                                                         
//  strtoupper($spl_arr[2]).str_repeat($spl_arr[2],2).'-'.  
//  strtoupper($spl_arr[3]).str_repeat($spl_arr[3],3).'-'. 
//  strtoupper($spl_arr[4]).str_repeat($spl_arr[4],4).'-'.
//  strtoupper($spl_arr[5]).str_repeat($spl_arr[5],5).'-'.
//  strtoupper($spl_arr[6]).str_repeat($spl_arr[6],6).'-'.
//  strtoupper($spl_arr[7]).str_repeat($spl_arr[7],7).'-'.
//  strtoupper($spl_arr[8]).str_repeat($spl_arr[8],8).'-'.
//  strtoupper($spl_arr[9]).str_repeat($spl_arr[9],9).'-'.
//  strtoupper($spl_arr[10]).str_repeat($spl_arr[10],10).'-'.
//  strtoupper($spl_arr[11]).str_repeat($spl_arr[11],11)
//  );

1.;
$parts = [];
    
    foreach (str_split('kodas') as $index => $part) {
      $parts[] = strtoupper($part) . str_repeat(strtolower($part), $index);
    }
    
    print implode('-',$parts);
2.;
$words = array();
    $counter = 1;
    foreach(str_split($s) as $char) {
      $char = strtolower($char);
      $word = str_repeat($char, $counter++);
      array_push($words, $word);
    }
    $str = implode("-", $words);
    return ucwords($str, "-");
3.;
$result = "";
for($i = 0; $i < strlen($s); $i++){
  $letter = $s[$i];
  $result .= strtoupper($letter) . str_repeat(strtolower($letter), $i) . '-';
}
return trim($result, "-");
4.;
$i = 1; $str = array();
foreach(str_split(strtolower($s)) as $letters)  {
    $str[] = ucwords(str_repeat($letters,$i)); $i++;
}
return implode("-",$str);
