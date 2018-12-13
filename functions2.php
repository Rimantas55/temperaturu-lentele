<?php
$t_from = 0;
$t_to = 41;

function getFeel($t) {

	if ($t > 30) {
		return "<tr class='bg-danger'><td></td><td>HOT</td></tr>"; 
	} else if ($t >= 15) {
		return "<tr class='bg-success'><td></td><td>WARM</td></tr>"; 
	} else if ($t >= 5 && $t <= 14) {
		return "<tr class='bg-info'><td></td><td>COOL</td></tr>"; 
	} else if ($t < 5) {
		return "<tr class='bg-warning'><td></td><td>COLD</td></tr>";
	}
}





