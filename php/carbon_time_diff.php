<?php 

$start = new \DateTime('03-03-2022 17:30');

$end = new \DateTime('04-03-2022 19:00');

echo $start->diff($end)->format('%d %m %H:%i');