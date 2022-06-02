<?php 
$t_from = 0;
$t_to = 40;

function getFeel($t) {
	
	if ($t > 30) {
		return "HOT"; 
	} else if ($t >= 15) {
		return "WARM"; 
	} else if ($t >= 5 && $t <= 14) {
		return "vėsu"; 
	} else if ($t < 5) {
		return "COLD"; 
	}
}




//$temperatures = []; 
for ($temp=$t_from; $temp < $t_to; $temp++) { 
	$temperatures[] = [
		'value' => $temp,
		'feel' => getFeel($temp),
		'style' => (getFeel($temp) == "HOT") ? "bg-danger" : "bg-success"  
	];
}

