<?php 

/**
 * crypt(string $str): string
 *
 */

// Encrypt on way

$password = crypt('password', 'salt');

$password_correct = crypt('password', 'salt');
$password_incorrect = crypt('false password', 'salt');

echo  $password . PHP_EOL;
echo  $password_correct . PHP_EOL;


// Safe string check for crypt()
echo hash_equals($password, $password_correct) ? 'Matched' : 'Not Matched' . PHP_EOL;
