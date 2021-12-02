<?php 

$month_number = 11;

$first_date = DateTime::createFromFormat('m', $month_number)->format('d-m-Y');
$last_date = DateTime::createFromFormat('m', $month_number)->format('t-m-Y');

echo $first_date .PHP_EOL;
echo $last_date . PHP_EOL;
