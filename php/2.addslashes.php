<?php 

/*

addslashes — Quote string with slashes
addslashes(string $str): string

Returns a string with backslashes added before characters that need to be escaped. These characters are:

single quote (')
double quote (")
backslash (\)
NUL (the NUL byte)

*/

$str = "I read books \ from O'reilly";

echo addslashes($str) . PHP_EOL	;
