<!DOCTYPE HTML>
<html>
	<head>
		<title>Clock</title>
		<?php require 'logic.php' ?>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

	<body class="<?php echo $class ?>">
		<h1>It is <?php echo date('g:i a') ?></h1>
		<img src='http://making-the-internet.s3.amazonaws.com/php-<?php echo $image ?>'>
	</body>
</html>
