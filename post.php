<!DOCTYPE html>
<html>
<head>
	<title>TJT Codes: <?php echo $post['title'] ?></title>

	<link rel="stylesheet" type="text/css" href="/css/main.css">
</head>
<body>
	<header>
		<h1>TJT.CODES</h1>
		<hr>
		<h2><?php echo $post['title'] ?> <small>[<?php echo $post['modified'] ?>]</small></h2>
	</header>

	<section>
		<?php echo $post['body'] ?>
	</section>
</body>
</html>
