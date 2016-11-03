<?php
	echo 	'<link rel="stylesheet" type="text/css" href="assignment3.css" />';
	include 'ParentClass.php';
	include 'ChildClass.php';
	// $ferg = new ParentClass("Darold Ferguson", "paint", "A\$AP Ferg");
	$asap = new ChildClass("Darold Ferguson", "rap", "A\$AP Ferg", "28", "Always Strive And Prosper", "New Level");
	// $obey = new ParentClass("Frank Fairey", "spray paint", "Shepard Fairey");
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Assignment 3</title>

	<link rel="stylesheet" type="text/css" href="assignment3.css" />
</head>
<body>
	<h1><center>Attention Class!<center/></h1>

	<section class="main">
		<p>
			Today I'll show you the relationship between being an artist and being a musician.
		</p>

		<p>
			See here...
			<br>
			<br>
			<?= $ferg; ?>
			He is an artist because he makes art!
			<br>
			<div class="pic">
				<img src="fergpainting.jpg" alt="http://67.media.tumblr.com/34d7aa4278ee3fd0e9f54167f6c6eac0/tumblr_nytj1fuOSj1s3t8ono3_1280.jpg" />
			</div>
		</p>

		<p>
			But...
			<br>
			<br>
			<?= $asap; ?>
			He is musician because he makes music!
			<br>
			<div class="pic">
				<img src="fergrapping.jpg" alt="http://static.spin.com/files/styles/style620_413/public/130730-ASAP-FERG-Trap-Lord-2.jpg" />
			</div>
		</p>

		<p>
			All musicians are artists.
			<br>
			but not all artists are musicians...
			<br>
			<br>
			<?= $obey; ?>
			He is an artist but is not a musician.
			<br>
			<div class="pic">
				<img src="faireypainting.jpg" alt="http://thehiphoppublicist.com/wp-content/uploads/2016/01/shepard-fairey-inc.jpg" />
			</div>
		</p>

		<p>
			None of this information is particularly usefull but at least it gets the point across.
		</p>
	</section>
</body>
</html>
