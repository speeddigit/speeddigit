<?php 


$shiftEnd = new DateTime("01-03-2022 15:30");
$clockOut = new DateTime("02-03-2022 00:30");

// echo ($shiftEnd->diff($clockOut))->format('H:i');

$diff = $shiftEnd->diff($clockOut);

echo $diff->h . ":" . $diff->i;