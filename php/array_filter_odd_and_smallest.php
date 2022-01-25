<?php 

$arr = ['hi', '3.3', -2, 5, 6, 2, 0, -4];
echo min(array_filter($arr, fn($i) => is_int($i))); 