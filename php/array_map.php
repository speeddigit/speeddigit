<?php 

$arr1 = ['hello', 'World', 'i', 'am', 'learning', 'PROGramming'];

$mapped_array1 = array_map(function($item) {
	return strtolower($item);
}, $arr1);

print_r($mapped_array1);

$arr2 = ['Hi', 'THIS', 'is',  'me'];
$mapped_array2 = array_map(fn($item) => strtolower($item), $arr2);
print_r($mapped_array2);