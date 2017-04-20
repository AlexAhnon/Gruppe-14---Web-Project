<?php

	$port = '8889';
	$username = 'root';
	$password = 'root';
	$database = 'website';

	$connection = new PDO("mysql:host=localhost;dbname={$database};port={$port}", $username, $password);

	$query = $connection->prepare('SELECT * FROM events');
	$query->execute();

	$events = [];

	while($event = $query->fetch(PDO::FETCH_ASSOC)) {
		$events[] = $event;
	}
?>

<!doctype html>

<html>
	<head>
		<title>Hjemmeside</title>
		<link rel="stylesheet" type="text/css" href="css.css">
	</head>
	<body>
		<?php require 'header.php' ?>

		<div id="square">
			<div class="row">
				<div class="block one"></div>
				<div class="block two"></div>
				<div class="block three"></div>
				<div class="block four"></div>
			</div>
		</div>
		</div>

		<?php require 'footer.php' ?>
	</body>
</html>