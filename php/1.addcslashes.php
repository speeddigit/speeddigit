<?php 

/* 

addcslashes — Quote string with slashes in a C style

addcslashes(string $str, string $chars): string

*/


echo addcslashes('Hello world', 'w') . PHP_EOL;
echo addcslashes('Hello world', 'A..z') . PHP_EOL;


$txt = 'Hello with \\n new line';

echo addcslashes($txt, '\\') . PHP_EOL	;