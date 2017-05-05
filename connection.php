<!-- Kobler opp mot databasen -->
<?php

	$port = '8889';
	$username = 'root';
	$password = 'root';
	$host = 'localhost';
	$database = 'database';

	$connection = new PDO("mysql:host={$host};dbname={$database};port={$port}", $username, $password);
?>