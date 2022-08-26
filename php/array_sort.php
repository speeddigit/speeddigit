<?php 

$sales = [
	['id' => 1,'name' => 'Sale 1','date' => '2022-01-01 20:30:35'],
	['id' => 2,'name' => 'Sale 2','date' => '2022-01-01 20:31:35'],
	['id' => 3,'name' => 'Sale 3','date' => '2022-01-01 19:30:35'],
	['id' => 4,'name' => 'Sale 4','date' => '2022-01-04 20:30:35'],
];

$purchases = [
	['id' => 1,'name' => 'Purchase 1','date' => '2022-01-02 20:30:35'],
	['id' => 2,'name' => 'Purchase 2','date' => '2022-01-01 20:31:35'],
	['id' => 3,'name' => 'Purchase 3','date' => '2022-01-03 19:30:35'],
	['id' => 4,'name' => 'Purchase 4','date' => '2022-01-04 20:30:35'],
];


$combined = array_merge($sales, $purchases);

function dateRange($date1, $date2, $format = "Y-m-d"): array
{
    if (strtotime($date1) > strtotime($date2)) {
        $start = new \DateTime($date2);
        $end = new \DateTime($date1);
        $end = $end->modify('+1 day');
    } else {
        $start = new \DateTime($date1);
        $end = new \DateTime($date2);
        $end = $end->modify('+1 day');
    }

    $interval = new \DateInterval('P1D');

    $period = new \DatePeriod($start, $interval, $end);

    $arr = [];
    foreach ($period as $date) {
        array_push($arr, $date->format($format));
    }
    return $arr;
}

$dateArray = dateRange('2022-01-02', '2022-01-03', 'Y-m-d');

$filteredData = array_filter($combined, function($item) use ($dateArray) {
	return ! in_array(date('Y-m-d', strtotime($item['date'])), $dateArray);
});


function sortArray($arr, $column, $ordering = 'asc') {
	usort($arr, function($x, $y) use($column, $ordering) {
		if(strtotime($x[$column]) == strtotime($y[$column])) return 0;
		
		if($ordering == 'asc') 
		{
			return (strtotime($x[$column]) < strtotime($y[$column])) ? -1 : 1;
		}

		if($ordering == 'desc') 
		{
			return (strtotime($x[$column]) < strtotime($y[$column])) ? 1 : -1;
		}
		
	});
	return $arr;
}

print_r(sortArray($combined, 'date', 'asc'));
print_r(sortArray($combined, 'date', 'desc'));