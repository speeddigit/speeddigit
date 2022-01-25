<?php 

$str1 = "No.                  Date Time";
$str2 = "50000001             1/15/2022 8:52 AM";
$str3 = "50000002                     1/15/2022 8:52";


echo (preg_match('/[a-zA-Z]/', $str1) ? 'Error' : 'Ok'). PHP_EOL;
echo (preg_match('/[a-zA-Z]/', $str2) ? 'Error' : 'Ok'). PHP_EOL;
echo (preg_match('/[a-zA-Z]/', $str3) ? 'Error' : 'Ok'). PHP_EOL;