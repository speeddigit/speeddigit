<?php 

// declare(strict_types=1);

$arr = ['name'  => 'John', 'age' => 100];

list('name' => $a, 'age' => $b, 'age' => $c)  = $arr;


echo $a . ' is '. $b . ' years old. ' . $c;