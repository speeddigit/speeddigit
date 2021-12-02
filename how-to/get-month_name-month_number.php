<?php

$months = array_reduce(range(1, 12), function($month, $item) {
	$month[$item] = DateTime::createFromFormat('m', $item)->format('F');
	return $month;
});


print_r($months);