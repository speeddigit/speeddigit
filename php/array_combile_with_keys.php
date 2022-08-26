<?php 

$parent = [
	0 => [
		"2022-07-01" => "CL",
	    "2022-07-02" => "SL"
	],
	1 => [
		"2022-07-03" => "SL",
	  	"2022-07-04" => "SL"
	]

];

$arr  = array_merge(... array_values($parent));
	

print_r($arr);