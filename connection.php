<!-- Kobler opp mot databasen -->
<?php

	$port = '8889';
	$username = 'root';
	$password = 'root';
	$database = 'database';

	$connection = new PDO("mysql:host=localhost;dbname={$database};port={$port}", $username, $password);4
?>