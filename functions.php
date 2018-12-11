<?php
$t_from = 0;
$t_to = 40;
function getFeel($t) {
	if ($t > 30) {
		return "karšta";
	} else if ($t > 15) {
		return "šilta";
	} else if ($t >= 5 && $t <= 14) {
		return "vėsu";
	}
}
//$temperatures = [];
for ($temp=$t_from; $temp < $t_to; $temp++) { 
	$temperatures[] = [
		'value' => $temp,
		'feel' => getFeel($temp),
		'style' => (getFeel($temp) == "karšta") ? "bg-danger" : "bg-success" 
	];
}

