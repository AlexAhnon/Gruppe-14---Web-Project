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

