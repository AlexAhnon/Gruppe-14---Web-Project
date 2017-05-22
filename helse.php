<?php require 'connection.php' ?>
<!-- Kobler opp mot databasen for å hente all informasjon fra relevant tabell -->
<?php
	$query = $connection->prepare('SELECT * FROM helse_table');
	$query->execute();

	$events = [];

	while($event = $query->fetch(PDO::FETCH_ASSOC)) {
		$events[] = $event;
	}
?>

<!doctype html>

<html>
	<head>
		<title>Westerdals: Campus Fjerdingen - Helse</title>
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" type="text/css" href="css/subsection.css">
	</head>
	<body>
		<?php require 'header.php' ?>

		<h1>Helse</h1>

		<!-- Lager nye kort for hver select -->
		<?php foreach ($events as $event) { ?>
				
		<!-- Start av content -->
		<div id="content-wrapper">
			<div class="content">
				<div class="picture"><img src="<?= $event[image_path] ?>"></div>
					<h2><?= $event[title] ?></h2>
					<p><?= $event[infotext] ?></p>
				<div class="read"><a href="helse_sub.php?id=<?= $event[id] ?>">Les mer...</a></div>
			</div>
		</div>

		<?php } ?>

		<?php require 'footer.php' ?>
	</body>
</html>