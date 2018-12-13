<?php include('functions.php'); ?>

<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS scope="col"-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">

	<title>TempFeel</title>
</head>
<body>
	<div class="container">
		<h1 class="bg-info text-light p-3">TempFeel</h1> <br />
		<a href="test.php" target="_blank"> Link to - Test </a>
		<div class="row"> 
			<div class="col">
				<table class="table table-dark">
					<thead>
						<tr>
							<th>Temperature</th>
							<th>Feeling</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							foreach ($temperatures as $t) {
								echo "<tr class='". $t['style'] . "'><td>" . $t['value'] .  "</td><td>". $t['feel'] . "</td></tr>";
							}
						?>


					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>