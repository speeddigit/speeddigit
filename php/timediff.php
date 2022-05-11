<?php 

require_once '../vendor/autoload.php';

use Carbon\Carbon;

$start = new Carbon('6:30');
$end = new Carbon('7:40');

$diff =  $end->diff($start);

echo $diff->h . ':'. $diff->i;



// echo $start->diffInMinutes($end) . PHP_EOL;

$diff = $start->diff($end);

$interval = $diff;
// $interval->addDays(10);
// echo $interval->minus(20, 'minutes');


// $mins = $diff->format('%h')*60 + $diff->format('%i') . PHP_EOL;

// $_h = intval($mins / 60);
// $_i = ($mins % 60);

// echo "$_h : $_i";
