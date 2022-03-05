<?php

// $str = '[{"name":"choice    _23","title":"Ram","options":["8GB|16GB|4GB"]},{"name":"choice_21","title":"Size","options":["M|S"]},{"name":"choice_24","title":"Edition","options":["ABS|Non ABS"]}]';



// $coll = json_decode($str);


// // foreach($coll as $key => $choice) {
// // 	echo $choice->name . PHP_EOL;
// // }

// print_r($coll[0]);
$str = 'Hello world how    are you';

echo str_replace(' ', '', $str);