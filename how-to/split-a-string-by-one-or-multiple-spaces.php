<?php 


$str = '2021-01-12   Friday';

list($date, $day) = preg_split('/\s+/i', trim($str));

echo $date . PHP_EOL;
echo $day . PHP_EOL;