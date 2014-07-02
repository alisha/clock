<?php
date_default_timezone_set('America/New_York');
$hour = intval(date('G'));

if ($hour >= 5 && $hour < 11) {
	$image = 'morning.png';
	$background = '#865f86';
} elseif ($hour >= 11 && $hour < 16) {
	$image = 'afternoon.png';
	$background = '#2c87c8';
} elseif ($hour >= 16 && $hour < 20) {
	$image = 'evening.png';
	$background = '#c7b02f';
} else {
	$image = 'night.png';
	$background = '#180629';
}