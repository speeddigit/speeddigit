<?php 

/**
 * crc32(string $str): int
 * Display a crc32 checksum
 */

$str1 = crc32("The quick brown fox jumped over the lazy dog.");
printf("%u \n", $str1);

$str2 = crc32("PHP");
printf("%u \n", $str2);