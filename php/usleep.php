<?php 


date_default_timezone_set('Asia/Dhaka');
echo date('Y-m-d H:i:sa');

echo PHP_EOL;

echo 'Waiting...' . PHP_EOL;

$ms =  10e5;

usleep($ms);

echo date('Y-m-d H:i:sa');