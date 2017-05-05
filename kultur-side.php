<?php require 'connection.php' ?>
<!-- Henter 'id' utifra forrige lenke og henter relevant informasjon gjennom fremmednøkkel -->
<?php

	$id = $_GET['id'];

	$sql = "SELECT * FROM kultur_table WHERE id = {$id}";

	$events = $connection->query($sql);

	$event = $events->fetch();
?>

<!doctype html>

<html>
	<head>
		<title>Westerdals: Campus Fjerdingen - Test</title>
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<link rel="stylesheet" type="text/css" href="css/subsection.css">
	</head>
	<body>
		<?php require 'header.php' ?>

		<!-- Start av content -->
		<div id="content-wrapper">
			<div class="content">
				<div class="picture"><img src="<?= $event[image_path] ?>"></div>
					<h1><?= $event[title] ?></h1>
					<p><?= $event[infotext] ?></p>
				<div class="lesmer"><a href="test2.php?id=<?= $event[id] ?>">Les mer...</a></div>
			</div>
		</div>

		<?php require 'footer.php' ?>
	</body>
</html>