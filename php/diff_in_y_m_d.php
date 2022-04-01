<?php


$origin = new DateTime('2022-3-1');
$target = new DateTime('2022-5-15');

$interval = $origin->diff($target);

echo $interval->format('%Y year %m month %d days');