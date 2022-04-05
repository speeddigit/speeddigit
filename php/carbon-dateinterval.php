<?php 

require_once '../vendor/autoload.php';

use Carbon\Carbon;
use Carbon\CarbonInterval;


$start = new DateTime('4:30');
$end = new DateTime('6:30');

$mins = 90;

$_dH = intval($mins / 60);
$_dI = intval($mins%60);

echo "$_dH $_dI" . PHP_EOL;

$diff = $start->diff($end);

// $diff->h = $diff->h - $_dH;
// $diff->i = $diff->i - $_dH;
echo $diff->i - $_dH;

// echo $diff->h . ' : '. $diff->i .PHP_EOL;

// echo $diff->format('%h:%i');