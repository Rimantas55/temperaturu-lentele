<?php
$t_from = 0;
$t_to = 41;

//pirmas kodo variantas
// function getFeel($t) {
// 	$result = array();

// 	if ($t >= 30) {
// 		$result['class'] = 'bg-danger';
// 		$result['feeling'] = 'HOT';
// 		return $result;
// 	} else if ($t >= 15 && $t < 30) {
// 		$result['class'] = 'bg-success';
// 		$result['feeling'] = 'WARM';
// 		return $result;
// 	} else if ($t >= 5 && $t < 15) {
// 		$result['class'] = 'bg-info';
// 		$result['feeling'] = 'COOL';
// 		return $result;
// 	} else if ($t < 5) {
// 		$result['class'] = 'bg-warning';
// 		$result['feeling'] = 'COLD';
// 		return $result;
// 	}
// }


//antras kodo variantas 

function getfeel2($t){
	if ($t >= 30) {
		return "
		<tr class ='bg-danger'>
			<td>" . $t . "</td>
			<td>HOT</td>
		</tr>";
	} else if ($t >= 15) {
		return "
		<tr class ='bg-success'>
			<td>" . $t . " </td>
			<td>WARM</td>
		</tr>";
	} else if ($t >= 5 && $t < 15) {
		return "
		<tr class ='bg-info'>
			<td>" . $t . " </td>
			<td>COOL</td>
		</tr>";
	} else if ($t < 5) {
		return "
		<tr class ='bg-warning'>
			<td>" . $t . " </td>
			<td>COLD</td>
		</tr>";
	}
}

