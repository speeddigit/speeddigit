<?php 

/**
 * count_chars(string $str, int $mode): string|array
 */

$str = "Hi, I am from SpeedDigit. A regular string with casual frequency";

$frequencies = count_chars($str, 1);

foreach($frequencies as $char => $count) {
	echo "Character '". chr($char) . "' Appeared " . $count . " Times" . PHP_EOL;
}


// Output:

// Character ' ' Appeared 10 Times
// Character ',' Appeared 1 Times
// Character '.' Appeared 1 Times
// Character 'A' Appeared 1 Times
// Character 'D' Appeared 1 Times
// Character 'H' Appeared 1 Times
// Character 'I' Appeared 1 Times
// Character 'S' Appeared 1 Times
// Character 'a' Appeared 4 Times
// Character 'c' Appeared 2 Times
// Character 'd' Appeared 1 Times
// Character 'e' Appeared 5 Times
// Character 'f' Appeared 2 Times
// Character 'g' Appeared 3 Times
// Character 'h' Appeared 1 Times
// Character 'i' Appeared 5 Times
// Character 'l' Appeared 2 Times
// Character 'm' Appeared 2 Times
// Character 'n' Appeared 2 Times
// Character 'o' Appeared 1 Times
// Character 'p' Appeared 1 Times
// Character 'q' Appeared 1 Times
// Character 'r' Appeared 5 Times
// Character 's' Appeared 2 Times
// Character 't' Appeared 3 Times
// Character 'u' Appeared 3 Times
// Character 'w' Appeared 1 Times
// Character 'y' Appeared 1 Times
