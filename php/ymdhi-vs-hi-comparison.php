<?php 

require_once '../vendor/autoload.php';
use Carbon\Carbon;

$start = Carbon::createFromFormat('Y-m-d H:i:s', '2022-04-03 17:20:10');

$end = new Carbon('2022-01-03 17:20:10');


$diff  = $start->diff($end);

print_r($diff);