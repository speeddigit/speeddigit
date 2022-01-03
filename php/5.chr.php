<?php 

/**
 * chr(int $codepoint): string
 * ASCII, ISO-8859, or Windows 1252 one byte string from number
 *
 */

echo chr(-159) . PHP_EOL;
echo chr(833) . PHP_EOL;
echo chr(240) . chr(159) . chr(144) . chr(152) . PHP_EOL;

echo mb_convert_encoding('&copy;', 'UTF-8', 'HTML-ENTITIES') . PHP_EOL;
echo mb_convert_encoding('&#' . intval(240) . ';', 'UTF-8', 'HTML-ENTITIES') . PHP_EOL;