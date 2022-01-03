<?php 

/**
 * chunk_split(string $str, int $length, string $separator): string
 *
 */

$str = 'Hello world';

echo chunk_split($str, 3, '*') . PHP_EOL;
echo chunk_split($str, 3, "\n") . PHP_EOL;
