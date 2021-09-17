<style>*{background: rgb(40, 108, 148);}</style>

<?php

// mano sprendimas:
$str='someday bitcoin will be new currency';
echo strlen(min((explode(' ',$str))));





// kitu sprendimas:








 function findShort($str){
    return min(array_map('strlen', (explode(' ', $str))));
}                     









$arrayLength=array();
            $array=explode(" ",$str);//Split strings into arrays by spaces
            foreach($array as $arr){
                                 Array_push($arrayLength,strlen($arr));//traverse $array to store the word length in another array
             }
                         Sort($arrayLength);//Upload the array in ascending order
                         Return $arrayLength[0];//return the first one






