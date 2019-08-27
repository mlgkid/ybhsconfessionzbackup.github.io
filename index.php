<?php
	date_default_timezone_set('America/Los_Angeles');
	include 'comments.ink.php';
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>YBHSconfessionz</title>
<link rel="stylesheet" type="text/css" href="style.css">
	<header id="main-header">
	<h1>Welcome to YBHS confessionz back up</h1>
	<style type="text/css">
		#main-header{
			text-align: center;
			background-color: green;
			color: white;
			padding: 10px;

		}
	</style> 
	</header>
</head>
<body>
	<p>
		Tired of low effort confession pages?
		Well this one is made with love and care.
		You think this will fail like the 
		original? DONT WORRY!! This is ran 
		by bots. SO THIS WILL NEVER DIE
	</p>
<?php

echo "<form method='POST' action='".setComments()."'>
		<input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
	<textarea name='message'></textarea>
	<button type='submit' name='submit'>Comment</button>
</form>

	<img src="confessions.png">
</body>
</html>