<?php 

$data = 'Data';
$null_value = null;
$integer_value = 10;

$obj = new stdClass();
$obj->name = 'Mr. John Doe';
$obj->is_active = false;


/**
 * `?:` operator
 */

 echo $data ?: "Default\n";
 echo $obj->is_active ?: "Active\n";


