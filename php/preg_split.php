<?php 

/**
 * preg_split()
 *
 */

$str = '   5000001                     10/19/2021     ';

$arr = preg_split('/\s+/', $str, -1, PREG_SPLIT_NO_EMPTY|PREG_SPLIT_DELIM_CAPTURE);
print_r($arr);

// Array
// (
//     [0] => 5000001
//     [1] => 10/19/2021
// )