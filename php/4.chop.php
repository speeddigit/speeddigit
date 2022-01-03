<?php 

/**
 * chop(string $str): string
 * Alias of rtim()
 */

$str1 = "String One        ";
$str2 = " String Two";

echo $str1 . $str2 . PHP_EOL;

echo chop($str1) . $str2 . PHP_EOL;


echo rtrim($str1) . $str2 . PHP_EOL;
