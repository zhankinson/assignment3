<?php
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
			<?= $ferg; ?>
			He is an artist because he makes art!
			<img src="" alt="" />
		</p>

		<p>
			But...
			<?= $asap; ?>
			He is a musician because he makes music!
			<img src="" alt="" />
		</p>

		<p>
			Now, all musicians are artists...
			<br>
			But not all artists are musicians.
		</p>

		<p>
			<?= $obey; ?>
			He is an artist but is not a musician.
			<img src="" alt="" />
		</p>

		<p>
			None of this information is particularly usefull but at least it gets the point across.
		</p>
	</section>
</body>
</html>
