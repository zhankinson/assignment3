<?php
	include 'ParentClass.php';
	include 'ChildClass.php';
	$ferg = new ParentClass("Darold Ferguson", "paint", "A\$AP Ferg");
	$asap = new ChildClass("Darold Ferguson", "A\$AP Ferg", "28", "Always Strive and Prosper", "New Level");
	$obey = new ParentClass("Frank Fairey", "spray paint", "Shepard Fairey");
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Assignment 3</title>

	<link rel="stylesheet" href="assignment3.css">
</head>
<body>
	<h1>Attention Class!</h1>

	<section>
		<p>
			Today I'll show you the difference between an artist and a musician.
		</p>

		<p>
			See here...
			<br>
			<?= $ferg; ?>
			He is an artist because he makes art!
			<br>
			<img src="fergpainting.jpg" alt="http://67.media.tumblr.com/34d7aa4278ee3fd0e9f54167f6c6eac0/tumblr_nytj1fuOSj1s3t8ono3_1280.jpg" />
		</p>

		<p>
			But...
			<br>
			<?= $asap; ?>
			He is a musician because he makes music!
			<br>
			<img src="fergrapping.jpg" alt="http://static.spin.com/files/styles/style620_413/public/130730-ASAP-FERG-Trap-Lord-2.jpg" />
		</p>

		<p>
			Now, all musicians are artists...
			<br>
			But not all artists are musicians.
		</p>

		<p>
			<?= $obey; ?>
			He is an artist but is not a musician.
			<br>
			<img src="faireypainting.jpg" alt="http://thehiphoppublicist.com/wp-content/uploads/2016/01/shepard-fairey-inc.jpg" />
		</p>

		<p>
			None of this information is particularly usefull but at least it gets the point across.
		</p>
	</section>
</body>
</html>
