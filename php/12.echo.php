<?php 

/**
 * echo or echo() separated by , character. Don't return any value. 
 * Its a language construct
 * 
 * echo(string ...$expressions): void 
 */

echo 'hello', 'world' . PHP_EOL;
echo 'Hi 
Multi
Line String' . PHP_EOL;
echo('hi hello') . PHP_EOL;

$name = "John Doe";

// Short echo
?>

<?= $name ?>