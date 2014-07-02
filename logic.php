<?php
$hour = intval(date('G'));

if ($hour >= 5 && $hour < 11) {
	$image = 'morning.png';
} elseif ($hour >= 11 && $hour < 16) {
	$image = 'afternoon.png';
} elseif ($hour >= 16 && $hour < 20) {
	$image = 'evening.png';
} else {
	$image = 'night.png';
}