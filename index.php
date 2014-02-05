<!DOCTYPE html>
<html>
	<head>
		<title>Cauchemars</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
		<link rel="stylesheet" type="text/css" href="css/main.css">
	</head>
	<body>
		<ul>
			<li><a href="?page=fiche">fiche</a></li>
			<li><a href="?page=test">test</a></li>
		</ul>
		<?php
		include 'page/'.$_GET['page'].'.php';
		?>
	</body>
</html>