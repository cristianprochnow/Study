<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!DOCTYPE html>

<html>
	<head>
		<title>CI Hello World App!</title>
	</head>

	<body>
		<?php foreach($result as $row): ?>
			<h3><?php echo $row['title']; ?></h3>
			<p> <?php echo $row['text']; ?></p>
			<br />
		<?php endforeach; ?>
	</body>
</html>
	