<?php

$str = 'Hello world';

$used = count_chars($str, 1);

// print_r($res);

foreach($used as $char => $count) 
{
	echo '`'. chr($char) .'`'. ' = '. $count . PHP_EOL;
}


// ` ` = 1
// `H` = 1
// `d` = 1
// `e` = 1
// `l` = 3
// `o` = 2
// `r` = 1
// `w` = 1

$unique_char = count_chars($str, 3);

print_r($unique_char);

// Hdelorw