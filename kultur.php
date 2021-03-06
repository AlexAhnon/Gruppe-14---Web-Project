<?php require 'connection.php' ?>
<!-- Kobler opp mot databasen for å hente all informasjon fra relevant tabell -->
<?php
	$query = $connection->prepare('SELECT * FROM kultur_table');
	$query->execute();

	$events = [];

	while($event = $query->fetch(PDO::FETCH_ASSOC)) {
		$events[] = $event;
	}
?>

<!doctype html>

<html>
	<head>
		<title>Westerdals: Campus Fjerdingen - Kultur</title>
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" type="text/css" href="css/subsection.css">
		<link rel="icon" href="img/wd_ikon.png" />
	</head>
	<body>
		<?php require 'header.php' ?>

		<h1>KULTUR</h1>

		<!-- Lager nye kort for hver select -->
		<?php foreach ($events as $event) { ?>
				
		<!-- Start av content -->
		<div id="content-wrapper">
			<div class="content">
				<div class="picture"><img src="<?= $event[image_path] ?>" alt="Steds bildet"></div>
					<h2><?= $event[title] ?></h2>
					<p><?= $event[infotext] ?></p>
				<div class="read"><a href="kultur_sub.php?id=<?= $event[id] ?>">Se kart &#10140;</a></div>
			</div>
		</div>

		<?php } ?>

		<?php require 'footer.php' ?>
	</body>
</html>