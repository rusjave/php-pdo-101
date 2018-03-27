<!DOCTYPE html>
<html>
<head>
	<title>OOP 101</title>
</head>
<body>
	<nav>

		<ul>

			<li>

				<a href=<?php echo "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>about.php>About Page</a>

			</li>

			<li>

				<a href=<?php echo "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>contact.php>Contact Page</a>

			</li>

		</ul>
		
	</nav>
	<ul>
		<?php foreach ($tasks as $task): ?>
		<li>
			<?php if ($task->completed): ?>

				<strike><?= $task->description?></strike>

			<?php else: ?>

			<?= $task->description; ?>

			<?php echo $task->description;?>

			<?php endif; ?>
		</li>
	<?php endforeach; ?>
	</ul>

</body>
</html>
