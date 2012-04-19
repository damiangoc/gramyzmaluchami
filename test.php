<?php
$a = array(3=>'c', 7=>'a', 5=>'b', 8=>'d');

function findPrevNext($arr, $index) {
    $keys = array_keys($arr);
//    print_r($keys);
    $values = array_values($arr);
    $searchedIndex = array_search($index, $keys);
//    $searchedIndex 
    echo $values[$searchedIndex-1] . ' ' . $values[$searchedIndex+ 1];
}

findPrevNext($a, 5);
?>