<!-- Kobler opp mot databasen -->
<?php

	$port = '3306';
	$username = 'hanale16_user';
	$password = 'userroot123';
	$host = 'tek.westerdals.no';
	$database = 'hanale16_database';

	$connection = new PDO("mysql:host={$host};dbname={$database};port={$port}", $username, $password);
?>