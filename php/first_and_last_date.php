<?php 

$d = "01-03-2022";

$dt =  (int) (new DateTime($d))->format('t');


var_dump($dt);

echo "\n";

echo date('Y-m-t', strtotime($d));

