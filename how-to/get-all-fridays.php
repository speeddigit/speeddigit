<?php 

function getFridayInMonth($month_number, $dateFormat = 'Y-m-d', $lastDateFormat = 'Y-m-t', $day = 'Friday'): array {
		$first_date = DateTime::createFromFormat('m', $month_number)->format($dateFormat);
		$last_date = DateTime::createFromFormat('m', $month_number)->format($lastDateFormat);
		$date1 = DateTime::createFromFormat($dateFormat, $first_date);
		$date2 = DateTime::createFromFormat($dateFormat, $last_date)->modify('+1day');
		$interval = new DateInterval('P1D');
		$period = new DatePeriod($date1, $interval, $date2);
		$dates = array();
		foreach($period as $date) {
			if($date->format('l') === $day) {
				array_push($dates, $date->format($dateFormat));
			}
		}
		return $dates;
}

$dates = getFridayInMonth(11);
print_r($dates);
