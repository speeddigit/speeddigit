<?php 

$formatter = new NumberFormatter('en-US', NumberFormatter::SPELLOUT);
$str = $formatter->format(147570);
echo ucwords($str);


$bdFormatter = new NumberFormatter('bn-BD', NumberFormatter::CURRENCY);

echo PHP_EOL;
echo $bdFormatter->format(423431245);