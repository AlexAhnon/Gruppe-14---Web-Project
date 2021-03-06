﻿<?php require 'connection.php' ?>
<!-- Henter 'id' utifra forrige lenke og henter relevant informasjon gjennom fremmednøkkel -->
<?php

	$id = $_GET['id'];

	$sql = "SELECT * FROM matogdrikke_sub_table WHERE id = {$id}";

	$events = $connection->query($sql);

	$event = $events->fetch();
?>

<!doctype html>

<html>
	<head>
		<title>Westerdals: Campus Fjerdingen - <?= $event[title] ?></title>
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" type="text/css" href="css/infopage.css">
		<link rel="icon" href="img/wd_ikon.png" />
	</head>
	<body>
		<?php require 'header.php' ?>

		<!-- Start av content -->
		<div id="content-wrapper">
			<div class="content">
			<h1><?= $event[title] ?></h1>
				<div class="picture"><img src="<?= $event[image_path] ?>" alt="Steds bildet"></div>
				<div class="googlemaps"><?= $event[google_maps] ?></div>
				<div class="extra"><p>
					<b>Hjemmeside:</b> <a href="<?= $event[homepage_link] ?>" target="_blank">Klikk her</a><br>
					<b>Lokasjon:</b> <?= $event[location] ?>
					<br>
					<br>
					<a href="mat-og-drikke.php"><span class="return">&#10550; Tilbake</span></a>
				</p></div>
			</div>
		</div>

		<?php require 'footer.php' ?>
	</body>
</html>