<?php 

$any_date = '10-11-2021';

$dt = \DateTime::createFromFormat('d-m-Y', $any_date);

echo $dt->format('01-m-Y');