<?php

//function addarray($anyarray)
//{
//    $return = 0;
//
//    foreach ($anyarray as $number) {
//
//        $return += $number;
//
//
//    }
//    return $return;
//}
//function add($arr,$arr2){
//    return addarray($arr) + addarray($arr2);
//
//    }
//
//
//$arr1 = ([1,2,3]);
//$arr2 = ([1]);
//
//
//echo add($arr1,$arr2);

function addstring($anystring){
    $string = "";
    foreach($anystring as $value){
        $string = $string ." ".  $value;
    }
    return $string;
}

function adddata($stirng1,$string2){
    return addstring($stirng1) . addstring($string2);
}

$string =(["miniyan","surname:"]);
$string2 = (["parajuli"]);

echo adddata($string,$string2);
